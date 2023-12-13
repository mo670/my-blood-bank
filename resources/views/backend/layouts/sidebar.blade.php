<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-person"></i><span>Patient Management</span><i
                      class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('allPatients') }}">
                          <i class="bi bi-circle"></i><span>All Patients</span>
                      </a>
                  </li>
                    {{-- <li>
                        <a href="{{ route('create.patient') }}">
                            <i class="bi bi-circle"></i><span>Create Patient</span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Donar Management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                         <a href="{{ route('all.donar') }}">
                            <i class="bi bi-circle"></i><span>All Donars</span>
                        </a>
                    </li>
                    <li>
                         <a href="{{ route('donar.form') }}"
                            <i class="bi bi-circle"></i><span>Create Donar Form</span>
                        </a>
                    </li>
                </ul>
            </li>
             <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span> All Donar's Blood</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> 
                        {{-- <a href="{{ route('blood.stock.list') }}"
                            <i class="bi bi-circle"></i><span>Blood groups</span>
                        </a>
                    </li>
                </ul>
            </li>
           
            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-droplet-fill"></i><span>Blood Bank</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  {{-- <a href="{{ route('blood.list') }}"> --}}
                    <i class="bi bi-circle"></i><span>Blood Bank Blood</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#customize-nav" data-bs-toggle="collapse" href="#">
                {{-- <i class="bi bi-envelope"></i><span>Messages</span><i class="badge badge-primary">({{ App\Models\BloodBankRequest::count()}})</i><i class="bi bi-chevron-down ms-auto"></i> --}}
              </a>
              <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                {{-- <li>
                  {{-- <a href="{{ route('messageLists') }}"> --}}
                    <i class="bi bi-circle"></i><span>All messages</span>
                  </a>
                </li>
              </ul>
            </li><!-- End Icons Nav --> 
            
    




        {{-- -----------------------------------------Donor SideBar----------------------------------- --}}
        {{-- @if (Auth::user()->position == 'Donar')
            <li class="nav-item">
                <a class="nav-link " href="{{ route('donar.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Donar Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @php
                $authID = Auth::user()->id;
                $logedInDonorID = App\Models\Donar::where('user_id', $authID)
                    ->pluck('id')
                    ->first();
                $total_req = App\Models\BloodRequest::where('donar_id', $logedInDonorID)->count('user_id');
            @endphp
            {{-- @dd($total_req) --}}
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Donate Request</span>
                    @if ($total_req > 0)
                        <span class="badge bg-primary badge-number ms-2" style="font-size: 15px;">{{ $total_req }}</span>
                    @else
                        <span class="badge bg-primary badge-number ms-2" style="font-size: 15px;">0</span>
                    @endif
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('requestedList') }}">
                          <i class="bi bi-circle"></i><span>Requeste List</span>
                      </a>
                  </li>
              </ul>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Donate Blood </span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('donate.bloodToBank') }}">
                            <i class="bi bi-circle"></i><span>Blood Bank</span>
                        </a>
                    </li>
                </ul>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                      <a href="{{ route('donate.ToPatient') }}">
                          <i class="bi bi-circle"></i><span>To Patient</span>
                      </a>
                  </li>
              </ul>
            </li>
        @endif --}}

        {{--

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

</aside>
