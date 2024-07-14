@extends('admin.layouts.app')
@section('content')
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
            </div>
            <div class="row">
              <!-- Order Statistics -->
              <div class="col-md-12 col-lg-12 col-xl-12 order-0 mb-4">
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                      <form id="formAuthentication" class="mb-3" action="{{route('admin.profile.update')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Admin"
                                aria-label="Admin"
                                name="name"
                                aria-describedby="basic-icon-default-fullname2"
                                value="{{ $auth->name}}" />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="text"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="john.doe"
                                aria-label="john.doe"
                                name="email"
                                value="{{ $auth->email }}"
                                aria-describedby="basic-icon-default-email2" />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Password</label>
                          {{-- <div class="col-sm-10">
                            <input class="form-control" type="password" name="password" value="{{ $auth->password }}" id="html5-password-input" />
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div> --}}
                          <div class="col-sm-10">
                          <div class="input-group input-group-merge col-sm-10">
                            <input
                              type="password"
                              class="form-control"
                              id="password" name="password"
                              value="{{ $auth->password }}"
                              aria-describedby="password" />
                            <span class="input-group-text cursor-pointer" id="togglePassword"><i class="bx bx-hide"></i></span>
                          </div>
                        </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
              <!--/ Order Statistics -->
            </div>
          </div>
          <script>
            document.getElementById('togglePassword').addEventListener('click', function (e) {
    const passwordInput = document.getElementById('password');
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.textContent = type === 'password' ? 'Show' : 'Hide';
});
          </script>
@endsection