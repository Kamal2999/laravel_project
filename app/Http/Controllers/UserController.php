<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Collective\Html\FormFacade as Form;
use Collective\Html\HtmlFacade as Html;

class UserController extends Controller
{

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function user()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function userRecord(Request $request)
    {
        $response['title'] = 'User Record';
        $type = $request->input('type');
        $value = $request->input('value');
        if ($value) {
            $where[$type] = $value;
        } else {
            $where = [];
        }
        $records = $this->UserModel->get_records('tbl_users', $where, '*', 10);

        $field = '<div = class="row">
        <div class="col-4">
        <select class="form-control" name="type">
            <option value="name" ' . $type . ' == "name" ? "selected" : "";?>
                Name</option>
                <option value="email" ' . $type . ' == "email" ? "selected" : "";?>
                Email</option>
        </select>
        </div>
        <div class="col-4">
        <input type="text" name="value" class="form-control text-dark float-right"
            value="' . $value . '" placeholder="Search">
        </div>
        <div class="col-4">
        <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
        </div>
        </div>
        </div>';


        $thead = '<tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Phone</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>';
        $tbody = [];

        $i = $records->firstItem();
        foreach ($records as $key => $record) {
            $tbody[$key] = '';

            $tbody[$key] .= '<tr>
                <td>' . $i . '</td>
                <td>' . $record->name . '</td>
                <td>' . $record->email . '</td>
                <td>' . $record->city . '</td>
                <td>' . $record->phone . '</td>
                <td><a class="btn btn-primary" href="' . route('fetch_data', ['id' => $record->id]) . '">view</a></td>
                <td><a class="btn btn-warning" href="' . route('form', ['id' => $record->id]) . '">Edit</a></td>
                <td><a class="btn btn-danger" href="' . route('delete.data', ['id' => $record->id]) . '">Delete</a></td>
            </tr>';
            $i++;
        }

        return view('report', [
            'records' => $records,
            'title' => 'User Report',
            'header' => 'User Report',
            'thead' => $thead,
            'tbody' => $tbody,
            'path' => $records->path(),
            'segment' => $records->currentPage(),
            'total_records' => $records->total(),
            'field' => $field,
            // 'search' => $search,
            'i' => $i
        ]);
    }


    public function report(Request $request)
    {
        $response['header'] = 'This is For Testing';
        $response['title'] = 'This is For Testing';
        $response['path'] = route('report');

        $type = $request->input('type');
        $value = $request->input('value');

        if ($type && $value) {
            $where = [$type => $value];
        } else {
            $where = [];
        }

        $records = $this->UserModel->get_records('tbl_students', $where, '*', 10);
        $response['records'] = $records;

        $response['field'] = '<div class="row">
            <div class="col-4">
                <select class="form-control" name="type">
                    <option value="name" ' . ($type == "name" ? "selected" : "") . '>Name</option>
                    <option value="email" ' . ($type == "email" ? "selected" : "") . '>Email</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" name="value" class="form-control text-dark float-right"
                    value="' . $value . '" placeholder="Search">
            </div>
            <div class="col-4">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>';

        $response['thead'] = '<tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>City</th>
                            </tr>';

        $tbody = [];
        $i = $records->firstItem();

        foreach ($records as $key => $record) {
            // Initialize the array key before appending
            $tbody[$key] = '';

            $tbody[$key] .= '<tr>
                <td>' . $i . '</td>
                <td>' . $record->name . '</td>
                <td>' . $record->city . '</td>
            </tr>';
            $i++;
        }

        $response['tbody'] = $tbody;
        return view('report', $response);
    }





    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'phone' => 'required|string',
    //         'city' => 'required|string',
    //     ]);

    //     $users = DB::table('tbl_users')->insert([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'city' => $request->input('city'),
    //         'phone' => $request->input('phone'),
    //     ]);

    //     if ($users) {
    //         return redirect()->back()->with('message', 'Data added successfully')->with('type', 'success');
    //     } else {
    //         return redirect()->back()->with('error', 'Data not added');
    //     }
    // }

    public function fetch_data($id)
    {
        $users = DB::table('tbl_users')->where('id', $id)->get();
        return view('fetch_data', ['data' => $users, 'id' => $id]);
    }

    public function update_data($id)
    {
        $users = DB::table('tbl_users')->where('id', $id)->get();
        return view('update', ['data' => $users, 'id' => $id]);
    }

    // public function updateData(Request $request, $id)
    // {
    //     $data = $request->input('users.' . $id);

    //     DB::table('tbl_users')->where('id', $id)->update([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'city' => $data['city'],
    //         'phone' => $data['phone'],
    //     ]);

    //     return redirect()->route('fetch_data', ['id' => $id])->with('message', 'User updated successfully!')->with('type', 'success');
    // }


    public function delete($id)
    {
        DB::table('tbl_users')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'User Deleted successfully...!')->with('type', 'danger');
        return redirect()->route('userRecord', ['id' => $id])->with('message', 'User Deleted successfully!')->with('type', 'danger');
    }

    public function form(Request $request, $id = null)
    {
        $response['title'] = $id ? 'Update Form' : 'Register Form';
        $response['header'] = $id ? 'Update Form' : 'Register Form';

        $user = $id ? DB::table('tbl_users')->where('id', $id)->first() : null;

        $response['form_open'] = Form::open(['route' => ['form', $id], 'method' => 'post']);

        $response['form'] = [
            'name' => Form::label('name', 'Name') . Form::text('name', $user ? $user->name : null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter Name']),
            'email' => Form::label('email', 'Email Address') . Form::email('email', $user ? $user->email : null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter Email Address']),
            'phone' => Form::label('phone', 'Phone Number') . Form::text('phone', $user ? $user->phone : null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Enter Phone Number']),
            'city' => Form::label('city', 'City') . Form::text('city', $user ? $user->city : null, ['id' => 'city', 'class' => 'form-control', 'placeholder' => 'Enter City']),
        ];

        $response['form_button'] = [
            'submit' => Form::submit($id ? 'Update' : 'Register', ['class' => 'btn btn-warning mt-3', 'id' => 'submit']),
        ];
        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'city' => 'required|string',
            ]);

            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'city' => $request->input('city'),
            ];

            if ($id) {
                $this->UserModel->update_data('tbl_users', ['id' => $id], $data);
                session()->flash('message', 'Data updated successfully');
            } else {
                $this->UserModel->add('tbl_users', $data);
                // DB::table('tbl_users')->insert($data);
                session()->flash('message', 'Data added successfully');
            }

            session()->flash('type', 'success');
            return redirect()->route('form', ['id' => $id]);
        }

        return view('form', $response);
    }

    public function union()
    {
        $users = DB::table('tbl_users')->select('name', 'city');
        $student = DB::table('tbl_students')->union($users)->select('name', 'city')->get();

        return $student;
    }
}
