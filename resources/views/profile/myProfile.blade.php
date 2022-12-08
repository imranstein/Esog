{{-- @extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('User')])

@section('content')
 --}}
 @section('title','Users')
 <x-app-layout>
     <div>
         <div class="content">
             <div class="container-fluid">
                @if($member)
                 <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        {{-- @if($member->photo) --}}
                         <img src = "{{ asset($member->photo) }}" alt = "photo" width = "100" height = "300">
                         {{-- @endif --}}
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Name</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->name }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Email</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->email }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Phone</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->phone }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Department</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->department }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Designation</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->designation }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            <span class="profile-username text-center">Workplace</span>
                                        </strong>
                                    </td>
                                    <td class="text-center">
                                        <span class="profile-username text-center">{{ $member->workplace }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                     </div>
                     <a href="{{ route('myProfile.edit',$member->id) }}" class="btn btn-primary">Edit</a>
                 </div>
                 @endif
                 <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            {{-- <input type="hidden" name="_token" value="u1oqXZXNh33LCFsuR87oiWM0bAY7c1wtNWWIa1Jg"> <input type="hidden" name="_method" value="put"> --}}
                            <div class="card ">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Change password</h4>
                                    <p class="card-category">Password</p>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input class="form-control" input type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required />
                                                @error('old_password')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" for="input-password">New Password</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required />
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required />
                                                @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary">Change password</button>
                                </div>
                            </div>
                        </form>
                    </div>
             </div>
             </div>
         </div>
     </div>
 </x-app-layout>
 {{-- @endsection --}}
