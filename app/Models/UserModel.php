<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    use HasFactory;

    public function update_data($table, $where, $data)
    {
        return DB::table($table)
            ->where($where)
            ->update($data);
    }

    public function get_single_record($table, $where, $select)
    {
        $query = DB::table($table)
            ->select($select)
            ->where($where)
            ->first();
        return (array) $query;
    }

    public function get_records($table, $where, $select, $perPage, $paginate = true)
    {
        $query = DB::table($table)
            ->select($select)
            ->where($where);

        if ($paginate && $perPage) {
            return $query->paginate($perPage);
        } else {
            return $query->get();
        }
    }

    public function add($table, $data){
        return DB::table($table)->insert($data);
    }
}
