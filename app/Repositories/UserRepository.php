<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use Auth;
use App\Models\Garage;
use App\Models\Customer;
use DB;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version April 8, 2019, 6:47 am UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function getUserInfo()
    {
        $role_id = Auth::user()->role_id;
        if ($role_id == 1) {

            return User::where('id', Auth::user()->id)->first();
        } elseif($role_id == 2) {

            return DB::table('users')
                    ->join('garages', 'users.garage_id', '=', 'garages.id')
                    ->select('users.*', 'garages.*')
                    ->where('users.id', Auth::user()->id)
                    ->get();
        } elseif($role_id == 3) {

            return DB::table('users')
                    ->join('customers', 'customers.user_id', '=', 'users.id')
                    ->select('users.*', 'customers.*')
                    ->where('users.id', Auth::user()->id)
                    ->first();
        }
    }
}
