@extends('front.layout')

@section('head_title', trans('front.main_title'))

@section('content')
<!-- Container Start -->
<div class="container">
    <div class="row">
        <!-- Left Column Start -->
        <div class="col-md-4 mt-3 mb-md-3">
            <div class="left-sidebar">
                <div id="personal-info">
                    <figure>
                        <img src="{{url('/skins/front/img/blue_day.jpg')}}" alt="Blue Day">
                    </figure>
                    <div id="full-name" class="text-md-left pl-3">
                        <h2>Nikola Kotarac</h2>
                    </div>
                    <div id="language-switcher-mobile" class="pt-1">
                        <ul class="list-inline">
                            <li class="list-inline-item pl-3">
                                @foreach($localeCodes as $localeCode)
                                <a class="pr-1 pl-1 text-uppercase" 
                                   href="{{route('home', ['lang' => $localeCode->locale_code])}}"> {{$localeCode->locale_code}}
                                </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                    <p><i class="fa fa-briefcase mt-3  pl-3 pr-3"></i>WEB Developer</p>
                    <p><i class="fa fa-home pl-3 pr-3"></i>Vardarska 17, {{trans('front.city_name')}}</p>
                    <p><i class="fa fa-envelope pl-3 pr-3"></i>nikola.kotarac@yahoo.com</p>
                    <p><i class="fa fa-phone pl-3 pr-3"></i>+381652468912</p>
                </div>
                <div class="divider">
                    <hr> 
                </div>
                <div id="skills" class="row pl-3 pr-2">
                    <p><b><i class="fa fa-asterisk pl-3 pr-3"></i>{{trans('front.skills_title')}}</b></p>
                </div>
                <div class="row pl-3 pr-2 align-items-center">
                    @foreach($skills as $skill)
                    <div class="col-3 pb-1 skill-holder">
                        <img src="{{url('/skins/front/img/logo/' . $skill->img_name)}}" alt="{{$skill->skill_name}}"/>
                    </div>
                    @endforeach
                </div>
                <div class="divider">
                    <hr> 
                </div>
                <div class="languages">
                    <p id="languages"><b><i class="fa fa-language pr-3 pl-3"></i>{{trans('front.languages_title')}}</b></p>
                    @foreach($languages as $language)
                    <p class="pl-3 pr-3 mb-1">{{$language->lang_name}}</p>
                    <div class="progress ml-3 mr-3 mb-2">
                        <div class="progress-bar bg-info" 
                             role="progressbar" 
                             aria-valuenow="50" 
                             aria-valuemin="0" 
                             aria-valuemax="100"
                             ></div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div><!-- Left Column End -->

        <!-- Right Column Start -->
        <div class="col-md-8 mt-3">
            <div class="row">
                <div class="col-12">
                    <div id="works" class="right-sidebar pt-3 pl-3 pr-3 pb-4">
                        <h2 class="pb-4 text-muted"><i class="fa fa-briefcase pr-3"></i>{{trans('front.work_experience_title')}}</h2> 
                        <div id="language-switcher" class="row pr-3">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    @foreach($localeCodes as $localeCode)
                                    <a class="pr-1 pl-1 text-uppercase" 
                                       href="{{route('home', ['lang' => $localeCode->locale_code])}}"> {{$localeCode->locale_code}}
                                    </a>
                                    @endforeach
                                </li>
                            </ul>
                        </div>
                        <div id="loading-jobs"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="education" class="right-sidebar pt-3 pl-3 pr-3 mb-md-3">
                        <h2 class="pb-4 text-muted"><i class="fa fa-graduation-cap pr-3"></i>{{trans('front.education_title')}}</h2>
                        <div id="loading-education"></div>
                    </div> 
                </div>
            </div>
        </div><!-- Right Column End -->
    </div>
    <div id="template">
        <h4></h4>
        <h5></h5>
        <h6></h6>
        <h6></h6>
        <p></p>
        <hr>
    </div>
    <!-- Contact Section Start -->
    <div class="row">
        <div class="col-md-12 pb-3 pt-0">
            <form method="post" action="" class="contact-form pt-3 pr-3 pl-3">
                {{csrf_field()}}
                <h2 class="text-center text-muted"><i class="fa fa-envelope pr-2"></i>{{trans('front.contact_title')}}</h2>
                <div id="message" class="row"></div>
                <label>{{trans('front.name_label')}}*</label>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <input type="text" name="contactFirstName" class="form-control" placeholder="{{trans('front.first_name_placeholder')}}">
                            <div class="error"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="contactLastName" class="form-control text-muted" placeholder="{{trans('front.last_name_placeholder')}}">
                            <div class="error"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email*</label>
                    <input type="email" name="contactEmail" class="form-control" placeholder="{{trans('front.email_placeholder')}}">
                    <div class="error"></div>
                </div>
                <div class="form-group">
                    <label>{{trans('front.message_label')}}*</label>
                    <textarea name="contactMessage" class="form-control" placeholder="{{trans('front.message_placeholder')}}"></textarea>
                    <div class="error"></div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-dark px-3 mb-3" data-action="submit">
                        <i class="fa fa-paper-plane pr-1"></i>
                        {{trans('front.button')}}
                    </button> 
                </div>
            </form>
        </div>
    </div> <!-- Contact Section End -->
</div><!-- Container End -->

@endsection

@push('footer_javascript') 
<script>

    $(document).ready(function () {

        $.ajax({
            "type": "GET",
            "url": "{{route('jobs', ['lang' => app()->getLocale()])}}",
            "cache": false,
            "beforeSend": function () {
                $('#loading-jobs').show();
            },
            "complete": function () {
                $('#loading-jobs').hide();
            }
        }).done(function (response) {

            for (var index in response) {

                var work = response[index];
                var newWork = $('#template').clone();
                newWork.find('h4').html(work.position).appendTo('#works');
                newWork.find('h6:odd').
                        html('<i class="fa fa-calendar-alt pr-2"></i>' + work.working_period)
                        .appendTo('#works');
                newWork.find('h5').html(work.company).appendTo('#works');
                newWork.find('h6:even').html('<i class="fa fa-map-marker-alt pr-2"></i>' + work.company_address + ', ' + work.city).appendTo('#works');
                newWork.find('p').html(work.job_description).appendTo('#works')
                        .after('<button data-action="show-job-description">' + "{{trans('front.button_job_desc')}}" + '</button>');
                newWork.find('hr').appendTo('#works');
            }


            $('#works').find('hr:last-child').remove();

            var jobDescriptionFirst = $('#works p:even').hide();
            var jobDescriptionSecond = $('#works p:odd').hide();
            var firstButtonShowJobDescription = $('#works [data-action="show-job-description"]:even');
            var secondButtonShowJobDescription = $('#works [data-action="show-job-description"]:odd');

            firstButtonShowJobDescription.on('click', function () {

                jobDescriptionFirst.slideToggle('slow');
            });
            secondButtonShowJobDescription.on('click', function () {

                jobDescriptionSecond.slideToggle('slow');
            });
        }).fail(function (data) {

            if (data.status !== 200 || data.readyState !== 4) {

                alert(' Whoops... Something went wrong! \n Please, refresh page and try again.');
            }
        });

        $.ajax({
            "type": "GET",
            "url": "{{route('education', ['lang' => app()->getLocale()])}}",
            "cache": false,
            "beforeSend": function () {
                $('#loading-education').show();
            },
            "complete": function () {
                $('#loading-education').hide();
            }
        }).done(function (response) {

            for (var index in response) {

                var education = response[index];
                var newEducation = $('#template').clone();
                newEducation.find('h4').html(education.education).appendTo('#education');
                newEducation.find('h6:odd').
                        html('<i class="fa fa-calendar-alt pr-2"></i>' + education.education_period)
                        .appendTo('#education');
                newEducation.find('h5').html(education.school).appendTo('#education');
                newEducation.find('h6:even').html('<i class="fa fa-map-marker-alt pr-2"></i>' + education.school_address + ', ' + education.city).appendTo('#education');
                newEducation.find('p').html(education.about_education).appendTo('#education')
                        .after('<button data-action="show-course-description">' + "{{trans('front.button_about_school')}}" + '</button>');
                newEducation.find('hr').appendTo('#education');
            }


            $('#education').find('hr:last-child').remove();

            var courseDescription = $('#education p').hide();
            var buttonAboutCourse = $('[data-action="show-course-description"]');
            $('[data-action="show-course-description"]:odd').hide();

            buttonAboutCourse.on('click', function () {

                courseDescription.slideToggle('slow');

            });


        }).fail(function (data) {

            if (data.status !== 200 || data.readyState !== 4) {

                alert(' Whoops... Something went wrong! \n Please, refresh page and try again.');

            }


        });

        $('.contact-form').on('submit', function (e) {

            e.preventDefault();
            function resetForm(form, element, className) {

                var target = form.find(element);
                target.removeClass(className);
                return form[0].reset();
            }

            var firstName = $('[name="contactFirstName" ]').val();
            var lastName = $('[ name="contactLastName" ]').val();
            var email = $('[name="contactEmail" ]').val();
            var message = $('[name="contactMessage" ]').val();
            var token = $('[name="_token"]').val();

            $.ajax({
                'type': 'POST',
                'url': "{{route('contact', ['locale' => app()->getLocale()])}}",
                'data': {
                    'contactFirstName': firstName,
                    'contactLastName': lastName,
                    'contactEmail': email,
                    'contactMessage': message,
                    '_token': token
                },
                'beforeSend': function () {

                    if (firstName !== '' && lastName !== '' && email !== '' && message !== '') {

                        var submitButton = $('.contact-form').find('[data-action="submit"]');
                        submitButton.find('i').hide();

                        submitButton.html(' <i class="ld ld-ring ld-spin"></i>' + "{{trans('front.button_action')}}").addClass('ld ld-ext-right running');

                    }

                },
                'complete': function () {

                    var submitButton = $('.contact-form').find('[data-action="submit"]');
                    var defaultContent = '<i class="fa fa-paper-plane pr-1"></i>' + " " + "{{trans('front.button')}}";
                    submitButton.removeClass('ld ld-ext-right running').html(defaultContent);

                    resetForm($('.contact-form'), 'div.form-group', 'has-success');
                }

            }).done(function (response) {


                $('#message').html(response);



            }).fail(function (data) {

                if (data.status === 500) {

                    alert(' Whoops... Something went wrong! \n Please, refresh page and try again.');
                }

            });
        });


        $(".contact-form").validate({
            highlight: function (element) {
                $(element).closest('.form-group').addClass("has-danger");
                $(element).addClass("contact-form-danger");
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
                $(element).removeClass('contact-form-danger').addClass('contact-form-success');
            },
            rules: {
                contactFirstName: {
                    required: true,
                    rangelength: [2, 20]
                },

                contactLastName: {
                    required: true,
                    rangelength: [2, 20]
                },

                contactEmail: {
                    required: true,
                    email: true
                },

                contactMessage: {
                    required: true,
                    minlength: 5
                }

            },
            messages: {
                contactFirstName: {
                    required: "{{trans('front.contact_name_required')}}",
                    rangelength: "{{trans('front.contact_name_rangelength')}}"
                },

                contactLastName: {
                    required: "{{trans('front.contact_surname_required')}}",
                    rangelength: "{{trans('front.contact_surname_rangelength')}}"
                },

                contactEmail: {
                    required: "{{trans('front.contact_email_required')}}",
                    email: "{{trans('front.contact_email_valid')}}!"
                },

                contactMessage: {
                    required: "{{trans('front.contact_message_required')}}",
                    minlength: "{{trans('front.contact_message_minlength')}}"
                }


            },
            errorElement: 'p',
            errorPlacement: function (error, element) {
                error.appendTo($(element).closest('.form-group').find('.error'));
            }
        });

        $('#language-switcher').find('.list-inline-item a:even').after('/');

        $('#language-switcher-mobile').find('.list-inline-item a:even').after('/');
    });







</script> 
@endpush

