<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index')
            ->with('users', $users);
    }

    public static function verifier_existence_email($email, $id)
    {
        $user = User::where("email",$email)->where('id','!=',$id)->count();

        return $user;
    }

    public static function verifier_existence_email_pour_creation_user($email)
    {
        $user = User::where("email",$email)->count();

        return $user;
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response 
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        //ligne suivante ajoutee pou ne pas save les password en plain text
        if ($this->verifier_existence_email_pour_creation_user($request->email) != 0) 
        {
            Flash::error('Email existant');
            return redirect()->back()->withInput();
        }
        $input['password'] = Hash::make( $request->password);
        $input['confirmation_password'] = Hash::make($request->confirmation_password);
        if ($request->password == $request->confirmation_password)
        {
            $user = $this->userRepository->create($input); 
           Flash::success('Utilisateur enregistre avec succes !!');
           return redirect(route('users.index'));
        }
        else
        {
            Flash::error('Les mots de passe sont differents !!');
            return redirect()->back()->withInput();
        }

        
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouve !');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Responseroute('users.index')
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Utilisateur non trouve !');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    { 
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Utilisateur introuvable !');

            return redirect(route('users.index'));
        }

        $input = $request->all();
       
        if(empty($request->password))
        {
        $input['password'] = $user->password;
        }
        if ($this->verifier_existence_email($request->email, $id) != 0) 
        {
            Flash::error('Email existant');
            return redirect()->back()->withInput();
        }
        $input['password'] = Hash::make( $request->password);
        if( isset($input['is_paye'] ))
        { 
            $input['is_paye'] = 1; 
        }else{
            $input['is_paye'] = 0; 
        }
        $user = $this->userRepository->update($input, $id);

        Flash::success('Utilisateur modifie avec succes !');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Utilisateur introuvable !');

            return redirect(route('users.index'));
        }

        // $this->userRepository->delete($id);
        User::where('id', $id)->forceDelete();

        Flash::success('Utilisateur supprime avec succes !');

        return redirect(route('users.index'));
    }
}
