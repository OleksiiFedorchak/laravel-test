@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center h-100 margin-top-10p">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="/sign-up" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group form-group">
                            <input name="first_name" type="text" class="form-control" placeholder="First name">
                        </div>

                        <div class="input-group form-group">
                            <input name="last_name" type="text" class="form-control" placeholder="Last name">
                        </div>

                        <div class="input-group form-group">
                            <input name="address" type="text" class="form-control" placeholder="Address">
                        </div>

                        <div class="input-group form-group">
                            <input name="city" type="text" class="form-control" placeholder="City">
                        </div>

                        <div class="input-group form-group">
                            <input name="zip" type="text" class="form-control" placeholder="zip">
                        </div>

                        <div class="input-group form-group">
                            <input name="email" type="text" class="form-control" placeholder="email">
                        </div>

                        <div class="input-group form-group">
                            <input name="phone" type="text" class="form-control" placeholder="phone">
                        </div>

                        <div class="input-group form-group">
                            <input name="password" type="password" class="form-control" placeholder="password">
                        </div>

                        <div class="input-group form-group">
                            Select image to upload:
                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                            <input name="avatar" type="file" />
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Sign up" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links ">
                        Already have an account?<a href="{{ route('sign-in') }}" class="color-black">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection