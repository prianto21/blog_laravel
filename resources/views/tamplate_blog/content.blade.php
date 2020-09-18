    @include('tamplate_blog.header')
    <div class="section">
		<!-- container -->
		<div class="container">
            @yield('content')

            @include('tamplate_blog.widget')
        </div>
    </div>

    @include('tamplate_blog.footer')
