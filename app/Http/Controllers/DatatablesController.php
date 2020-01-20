<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\User;


class DatatablesController extends Controller
{
    public function getUsers()
    {
        return Datatables::of(User::query())
            ->setRowId('id')
            ->setRowData([
                'status' => function($user) {
                    return $user->deactivated?
                                'deactivated':
                                'active';
                }
            ])
            ->addColumn('action', function ($user) {
                return '

                <a href="/admin/user/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>

                <a data-toggle="modal" data-target="#deleteModal'.$user->id.'" href="javascript:void(0)" class="confirm-delete-modal btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Delete</a>

                <div class="modal fade" id="deleteModal'.$user->id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure!
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="/admin/user/delete/'.$user->id.'" method="GET">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>


                ';

            })
            ->removeColumn('password')
            ->make(true);

    }

}
