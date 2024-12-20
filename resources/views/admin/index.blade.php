@extends('layouts.admin.app')

@section('content')
    <div class="bg-white p-2">
        <div class="row mx-5 mt-5 mb-3">
            <div class="col-2">
                <img src="{{ asset('storage/images/admin-icon.png') }}" alt="admin-logo" class="img-thumbnail border-0 d-block mx-auto avatar-lg">
            </div>
            <div class="col-10">
                <div class="row mb-2">
                    <h6 class="fw-bold">THE ADMIN</h6>
                </div>
                <div class="row mb-3">
                    <div class="col-auto">
                        <h1 class="display-4 mb-0">{{ Auth::user()->name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-5 mb-3">
            <h5 class="fw-bold">AFFILIATION</h5>
            <p>The marketing Department of Natural Corporation</p>
        </div>
        <div class="row mx-5 mb-3">
            <h5 class="fw-bold">ADMIN PANEL</h5>
            <div class="col">
                <a href="{{ route('admin.consumer.management') }}" class="text-decoration-none">
                    <div class="card border border-primary border-4 rounded-5 text-center p-3">
                        <div class="mx-auto text-dark">
                            <svg width="56" height="55" viewBox="0 0 56 55" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_374_3574)">
                                <g filter="url(#filter0_d_374_3574)">
                                <path d="M51.8914 36.6867C51.7302 36.5007 51.5309 36.3515 51.307 36.2492C51.0831 36.1469 50.8399 36.0939 50.5938 36.0938H47.1562V32.6562C47.1562 30.7622 45.6145 29.2188 43.7188 29.2188H36.8438C34.948 29.2188 33.4062 30.7622 33.4062 32.6562V36.0938H29.9688C29.7224 36.0937 29.4789 36.1466 29.2548 36.2489C29.0307 36.3512 28.8312 36.5005 28.6698 36.6867C28.5085 36.8728 28.389 37.0915 28.3195 37.3278C28.2501 37.5642 28.2322 37.8127 28.2672 38.0566L29.9859 50.0878C30.0447 50.4972 30.2491 50.8717 30.5616 51.1426C30.8742 51.4135 31.2739 51.5626 31.6875 51.5625H48.875C49.2886 51.5626 49.6883 51.4135 50.0009 51.1426C50.3134 50.8717 50.5178 50.4972 50.5766 50.0878L52.2953 38.0566C52.3301 37.8126 52.3121 37.5641 52.2424 37.3277C52.1727 37.0914 52.053 36.8728 51.8914 36.6867ZM36.8438 32.6562H43.7188V36.0938H36.8438V32.6562ZM47.3848 48.125H33.1777L31.9505 39.5312H48.612L47.3848 48.125ZM17.9375 34.375H21.375V51.5625H17.9375V34.375Z" fill="#000000"/>
                                </g>
                                <g filter="url(#filter1_d_374_3574)">
                                <path d="M29.5906 30.7227L26.3147 26.6252L23.8363 20.4291C23.4555 19.4707 22.7952 18.649 21.9412 18.0709C21.0872 17.4928 20.0791 17.185 19.0478 17.1875H9.34375C6.50094 17.1875 4.1875 19.5009 4.1875 22.3438V34.375C4.1875 36.2708 5.72922 37.8125 7.625 37.8125H9.34375V51.5625H12.7813V34.375H7.625V22.3438C7.625 21.8879 7.80608 21.4507 8.12841 21.1284C8.45074 20.8061 8.88791 20.625 9.34375 20.625H19.0478C19.7542 20.625 20.3816 21.0495 20.6428 21.7061L23.4702 28.5742L26.9077 32.8711L29.5906 30.7227ZM7.625 8.59375C7.625 4.80219 10.7084 1.71875 14.5 1.71875C18.2916 1.71875 21.375 4.80219 21.375 8.59375C21.375 12.3853 18.2916 15.4688 14.5 15.4688C10.7084 15.4688 7.625 12.3853 7.625 8.59375ZM11.0625 8.59375C11.0625 10.4895 12.6042 12.0312 14.5 12.0312C16.3958 12.0312 17.9375 10.4895 17.9375 8.59375C17.9375 6.69797 16.3958 5.15625 14.5 5.15625C12.6042 5.15625 11.0625 6.69797 11.0625 8.59375Z" fill="#000000"/>
                                </g>
                                </g>
                                <defs>
                                <filter id="filter0_d_374_3574" x="13.9375" y="29.2188" width="42.375" height="30.3438" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3574"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3574" result="shape"/>
                                </filter>
                                <filter id="filter1_d_374_3574" x="0.1875" y="1.71875" width="33.4031" height="57.8438" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3574"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3574" result="shape"/>
                                </filter>
                                <clipPath id="clip0_374_3574">
                                <rect width="55" height="55" fill="white" transform="translate(0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <h4 class="text-dark fw-bold mt-1 mb-0">Consumer <br> Management</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.farm.management') }}" class="text-decoration-none">
                    <div class="card border border-success border-4 rounded-5 text-center p-3">
                        <div class="mx-auto text-dark">
                            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_374_3578)">
                                <g filter="url(#filter0_d_374_3578)">
                                <path d="M19.4166 33.25V10.6875C19.4166 9.11278 18.802 7.60255 17.7081 6.48905C16.6141 5.37556 15.1304 4.75 13.5833 4.75C12.0362 4.75 10.5525 5.37556 9.4585 6.48905C8.36454 7.60255 7.74996 9.11278 7.74996 10.6875V33.25M19.4166 19L33.4166 7.125L52.0833 21.375M47.4166 9.5V33.25M28.75 33.25H38.0833V23.75H28.75V33.25ZM28.75 33.25L17.0833 52.25M5.41663 33.25H52.0833M5.41663 52.25L17.0833 33.25M52.0833 52.25H28.75L40.4166 33.25M35.75 42.75H52.0833" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"/>
                                </g>
                                </g>
                                <defs>
                                <filter id="filter0_d_374_3578" x="-0.583618" y="2.75" width="58.667" height="59.5002" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3578"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3578" result="shape"/>
                                </filter>
                                <clipPath id="clip0_374_3578">
                                <rect width="56" height="57" fill="white" transform="translate(0.75)"/>
                                </clipPath>
                                </defs>
                            </svg>
                        </div>

                        <h4 class="text-dark fw-bold mt-1 mb-0">Farm <br> Management</h4>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.item.management') }}" class="text-decoration-none">
                    <div class="card border border-warning border-4 rounded-5 text-center p-3">
                        <div class="mx-auto text-dark">
                            <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_374_3581)">
                                <path d="M43.3021 39.4333C50.2792 32.4562 51.1159 23.5409 49.0186 16.5827C48.64 15.3183 48.8331 13.9554 49.4539 12.7894C51.1234 9.66245 51.1689 6.41809 48.6968 3.94602C46.2209 1.47016 42.9766 1.51559 39.8458 3.18887C38.6881 3.82766 37.3255 3.9854 36.0525 3.62802C29.0981 1.53452 20.1904 2.37495 13.2133 9.34823C6.24379 16.3215 5.39958 25.2255 7.48929 32.1837C7.86786 33.4481 7.671 34.8109 7.05015 35.9732C5.37686 39.1077 5.32765 42.3521 7.80729 44.8279C10.2794 47.3 13.5199 47.2584 16.6469 45.5889C17.8052 44.9514 19.1677 44.795 20.4402 45.1535C27.3984 47.2546 36.3175 46.4217 43.2984 39.4371L43.3021 39.4333Z" stroke="#000000" stroke-width="3.42857"/>
                                <path d="M33.3608 10.7869C28.8066 9.41644 22.969 9.96536 18.3997 14.5347C16.1317 16.7507 14.6439 19.6426 14.1597 22.7762" stroke="#000000" stroke-width="3.42857" stroke-linecap="round"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_374_3581" x="0.14563" y="0.285645" width="56.2086" height="56.2019" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="4"/>
                                <feGaussianBlur stdDeviation="2"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3581"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3581" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                        </div>

                        <h4 class="text-dark fw-bold mt-1 mb-0">Item <br> Management</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mx-5 mb-3">
            <a href="{{ route('admin.analysis') }}" class="text-decoration-none">
                <div class="card border border-danger border-4 rounded-5 text-center p-3">
                    <div class="mx-auto text-dark">
                        <svg width="59" height="56" viewBox="0 0 59 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_374_3560)">
                            <rect width="58" height="56" transform="translate(0.75)" fill="#FFFCFC"/>
                            <path d="M15.25 17.5H29.75V21H15.25V17.5ZM15.25 10.5H37V14H15.25V10.5ZM15.25 3.5H37V7H15.25V3.5Z" fill="white"/>
                            <g filter="url(#filter0_d_374_3560)">
                            <path d="M9.28869 46.6338L19.4949 29.1408L32.969 40.4983C33.3763 40.8482 33.8601 41.105 34.3844 41.2494C34.9087 41.3937 35.46 41.4221 35.9972 41.3323C36.5345 41.2425 37.0438 41.0368 37.4873 40.7306C37.9308 40.4244 38.297 40.0256 38.5588 39.5638L51.1919 21.3585L48.1813 19.409L35.4938 37.693L35.3669 37.8733L21.891 26.5158C21.4838 26.1678 21.0009 25.9127 20.4779 25.7691C19.9549 25.6255 19.4051 25.5971 18.8692 25.6862C18.3334 25.7752 17.8251 25.9793 17.3818 26.2834C16.9386 26.5876 16.5718 26.9839 16.3085 27.4433L8 41.704V1.13379H4.375V46.6338C4.375 47.562 4.75692 48.4523 5.43674 49.1087C6.11656 49.765 7.03859 50.1338 8 50.1338H55.125V46.6338H9.28869Z" fill="#000000"/>
                            </g>
                            </g>
                            <defs>
                            <filter id="filter0_d_374_3560" x="0.375" y="1.13379" width="58.75" height="57" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dy="4"/>
                            <feGaussianBlur stdDeviation="2"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3560"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3560" result="shape"/>
                            </filter>
                            <clipPath id="clip0_374_3560">
                            <rect width="58" height="56" fill="white" transform="translate(0.75)"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <h4 class="text-dark fw-bold mt-1 mb-0">Analysis</h4>
                </div>
            </a>
        </div>
        <div class="row mx-5 mb-3">
            <canvas id="annualNumberOfUsersChart"></canvas>
        </div>
    </div>

    @push('scripts')
    <script>
        const data = {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            
            datasets: [{
                label: 'Annual Numbers of User',
                data: @json($userMonthlyCounts),
            }]
        };
        const config = {
            type: 'bar',
            data: data
        };
        
        new Chart(
            document.getElementById('annualNumberOfUsersChart'),
            config
        );
    </script>
    @endpush
@endsection