


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>abdurrahmanarif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{ asset('dashboard')}}/assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->

    <style>
        * {
        margin: 0;
        padding: 0;
        }
    </style>
</head>

<body>

    <section class="h-100 gradient-form">
    <div class="h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="text-black">
            <div class="row g-0">
                <div class="col-lg-6 text-white" style="background-color: #25313d; height: 600px;">
                            <div class="card-body" style="padding: 110px 45px 1px 241px;">
                                <div class="text-center">
                                    <h4 class="mt-1 mb-5 pb-1 ">Sign Up</h4>
                                </div>

                                <form action="" method="post" class="d-flex align-items-center ">
                                      @csrf
                                        <div class="">

                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="name" id="inputEnterYourName" placeholder="Enter Your Name" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <input type="phone" class="form-control" name="phone_number" id="inputPhoneNo2" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <input type="email" class="form-control" name="email" id="inputEmailAddress2" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" name="password" id="inputChoosePassword2" placeholder="Choose Password" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <input type="password" class="form-control" id="inputConfirmPassword2" name="password_confirmation" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <button type="submit" class="btn btn-info px-3">Sign Up</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                            </div>
                        </div>
            </div>
            </div>
        </div>
    </div>
    </section>

</body>
</html>




{{--
@component('mail::message')
# Welcome for your registration

Welcome again.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
