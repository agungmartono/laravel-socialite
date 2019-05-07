@extends('layouts.master')

@section('content')
<section class="section section-components">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-12">
                        <div class="text-muted text-center mb-3">
                            <h4>Sign in with</h4>
                        </div>
                        <div class="btn-wrapper text-center">
                            <a href="{{ url('/auth/github') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="{{ url('/auth/gitlab') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-gitlab" aria-hidden="true"></i>
                                </span>
                                <span class="btn-inner--text">Gitlab</span>
                            </a>
                            <a href="{{ url('/auth/google') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                            <a href="{{ url('/auth/facebook') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </span>
                                <span class="btn-inner--text">Facebook</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
