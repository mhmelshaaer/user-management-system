'use strict';

var stripe = Stripe('pk_test_arOunEkHhkOuTylHvcQwCrOO00G4my4bEe');

function registerElements(elements, exampleName) {

    var formClass = '.' + exampleName;
    var example = document.querySelector(formClass);

    var form = example.querySelector('form');
    var resetButton = example.querySelector('a.reset');
    var error = form.querySelector('.error');
    var errorMessage = error.querySelector('.message');

    function enableInputs() {
        Array.prototype.forEach.call(
        form.querySelectorAll(
            "input[type='text'], input[type='email'], input[type='tel']"
        ),
        function(input) {
            input.removeAttribute('disabled');
        }
        );
    }

    function disableInputs() {
        Array.prototype.forEach.call(
        form.querySelectorAll(
            "input[type='text'], input[type='email'], input[type='tel']"
        ),
        function(input) {
            input.setAttribute('disabled', 'true');
        }
        );
    }

    function triggerBrowserValidation() {
        // The only way to trigger HTML5 form validation UI is to fake a user submit
        // event.
        var submit = document.createElement('input');
        submit.type = 'submit';
        submit.style.display = 'none';
        form.appendChild(submit);
        submit.click();
        submit.remove();
    }

    // Listen for errors from each Element, and show error messages in the UI.
    var savedErrors = {};
    elements.forEach(function(element, idx) {
        element.on('change', function(event) {
        if (event.error) {
            error.classList.add('visible');
            savedErrors[idx] = event.error.message;
            errorMessage.innerText = event.error.message;
        } else {
            savedErrors[idx] = null;

            // Loop over the saved errors and find the first one, if any.
            var nextError = Object.keys(savedErrors)
            .sort()
            .reduce(function(maybeFoundError, key) {
                return maybeFoundError || savedErrors[key];
            }, null);

            if (nextError) {
            // Now that they've fixed the current error, show another one.
            errorMessage.innerText = nextError;
            } else {
            // The user fixed the last error; no more errors.
            error.classList.remove('visible');
            }
        }
        });
    });

    // Listen on the form's 'submit' handler...
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Trigger HTML5 validation UI on the form if any of the inputs fail
        // validation.
        var plainInputsValid = true;
        Array.prototype.forEach.call(form.querySelectorAll('input'), function(
        input
        ) {
        if (input.checkValidity && !input.checkValidity()) {
            plainInputsValid = false;
            return;
        }
        });
        if (!plainInputsValid) {
        triggerBrowserValidation();
        return;
        }

        // Show a loading screen...
        example.classList.add('submitting');

        // Disable all inputs.
        disableInputs();

        // Gather additional customer data we may have collected in our form.
        var name = form.querySelector('#' + exampleName + '-name');
        var zip = form.querySelector('#' + exampleName + '-zip');
        var additionalData = {
            name: name ? name.value : undefined,
            address_zip: zip ? zip.value : undefined,
        };

        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        const { setupIntent, error } = await stripe.confirmCardSetup(
            clientSecret, {
                payment_method: {
                    card: elements[0],
                    billing_details: { name: additionalData.name }
                }
            }
        );

        if (error) {

            // Stop loading!
            example.classList.remove('submitting');

            // Otherwise, un-disable inputs.
            enableInputs();
            console.log(error);

        } else {

            console.log(setupIntent);

            stripeTokenHandler(setupIntent.payment_method);
            example.classList.add('submitted');

        }

    });


    function stripeTokenHandler(token) {

        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('subscription-form');
        var hiddenInput = document.createElement('input');

        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'payment_method');
        hiddenInput.setAttribute('value', token);

        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();

      }

    resetButton.addEventListener('click', function(e) {
        e.preventDefault();
        // Resetting the form (instead of setting the value to `''` for each input)
        // helps us clear webkit autofill styles.
        form.reset();

        // Clear each Element.
        elements.forEach(function(element) {
        element.clear();
        });

        // Reset error state as well.
        error.classList.remove('visible');

        // Resetting the form does not un-disable inputs, so we need to do it separately:
        enableInputs();
        example.classList.remove('submitted');
    });
}
