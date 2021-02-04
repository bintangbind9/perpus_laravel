@extends('welcome')

@section('title', 'Home')

@if (Route::has('login'))
    @auth

    @section('konten')
        <svg id="Layer_1" enable-background="new 0 0 511.168 511.168" height="512" viewBox="0 0 511.168 511.168" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m16.696 96.479h385.635v107.293h-385.635z" fill="#ffda45"/></g><path d="m359.331 96.479h43v107.293h-43z" fill="#fac800"/><path d="m237.834 96.479h122v107.293h-122z" fill="#fff5f5"/><g><g><g><path d="m482.168 503.668h-382.667c-31.296 0-56.667-25.371-56.667-56.667 0-31.296 25.371-56.667 56.667-56.667h382.667z" fill="#f0f5fa"/><path d="m442.168 390.335h40v113.333h-40z" fill="#e4ecf2"/><g><path d="m502.167 511.168h-402.666c-35.381 0-64.167-28.785-64.167-64.167s28.785-64.167 64.167-64.167h402.667c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5h-402.667c-27.11 0-49.167 22.056-49.167 49.167 0 27.11 22.056 49.167 49.167 49.167h402.667c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.501 7.5z" fill="#6e9eff"/></g><g><g><path d="m482.167 435.613h-308.909c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h308.909z" fill="#c5d7e6"/></g><g><path d="m482.167 473.391h-226.889c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h226.889z" fill="#c5d7e6"/></g></g></g><g><path d="m418.028 375.377h-372.353c-20.254 0-36.674-16.419-36.674-36.674 0-20.254 16.419-36.674 36.674-36.674h372.354v73.348z" fill="#f0f5fa"/><path d="m378.028 302.029h40v73.348h-40z" fill="#e4ecf2"/><g><path d="m440.972 382.877h-395.297c-24.357 0-44.174-19.816-44.174-44.174s19.816-44.174 44.174-44.174h395.297c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5h-395.297c-16.086 0-29.174 13.087-29.174 29.174s13.087 29.174 29.174 29.174h395.297c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5z" fill="#74d84b"/></g><g><g><path d="m418.028 347.761h-105.315c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h105.315z" fill="#c5d7e6"/></g></g></g><g><path d="m133.046 7.5h298.87c22.5 0 40.739 18.24 40.739 40.739 0 22.5-18.24 40.739-40.739 40.739h-298.87z" fill="#f0f5fa"/><path d="m431.916 7.5h-40c22.5 0 40.739 18.24 40.739 40.739 0 22.5-18.24 40.739-40.739 40.739h40c22.5 0 40.739-18.24 40.739-40.739 0-22.499-18.239-40.739-40.739-40.739z" fill="#e4ecf2"/><g><path d="m431.916 96.479h-324.357c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h324.357c18.328 0 33.239-14.911 33.239-33.239s-14.911-33.24-33.239-33.24h-324.357c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h324.357c26.599 0 48.239 21.64 48.239 48.239s-21.64 48.24-48.239 48.24z" fill="#fc435f"/></g></g><g><g><path d="m60.099 203.771h445.902v90.758h-445.902z" fill="#6e9eff"/></g><path d="m369.834 203.771h136.167v90.758h-136.167z" fill="#bf6930"/><path d="m466.001 203.771h40v90.758h-40z" fill="#ad5f2c"/><path d="m213.501 264.15h-102.009c-8.284 0-15-6.716-15-15 0-8.284 6.716-15 15-15h102.009c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15z" fill="#fff5f5"/><g><path d="m462.667 256.65h-48.833c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h48.833c4.142 0 7.5 3.358 7.5 7.5s-3.357 7.5-7.5 7.5z" fill="#fff5f5"/></g></g><g><g><path d="m326.167 166.956c-4.142 0-7.5-3.358-7.5-7.5v-18.662c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v18.662c0 4.142-3.357 7.5-7.5 7.5z" fill="#677a8f"/></g><g><path d="m298.834 166.956c-4.142 0-7.5-3.358-7.5-7.5v-18.662c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v18.662c0 4.142-3.357 7.5-7.5 7.5z" fill="#677a8f"/></g><g><path d="m271.501 166.956c-4.142 0-7.5-3.358-7.5-7.5v-18.662c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v18.662c0 4.142-3.358 7.5-7.5 7.5z" fill="#677a8f"/></g></g></g><g><path d="m132.834 40.739h171.138c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5h-171.138z" fill="#c5d7e6"/></g></g></g></svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="jumbotron">
            <h1 class="display-4">Ayo Membaca!</h1>
            <p class="lead">
                Mengapa sih kita harus membaca? Karena membaca merupakan suatu cara untuk mendapatkan informasi tertulis.
            </p>
            <hr class="my-4">
            <!-- <p>
                Membaca dapat dilakukan untuk sendiri maupun dengan suara lantang yang dapat menguntungkan untuk pendengar lain, juga untuk membangun konsentrasi kita sendiri.
            </p> -->
            <p>
                Suatu asumsi menyatakan budaya membaca lebih penting daripada bersekolah dalam tujuan mencapai kesuksesan. Mengapa demikian?
            </p>
            <p>Ayo membaca dan temukan jawabannya!</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/buku" role="button"><i class="fas fa-book-open"></i> Pinjam Buku!</a>
            </p>
        </div>
    @endsection

@else
    @section('konten')
        <div class="alert alert-danger" role="alert">
            You don't have any access!
        </div>
    @endsection
        @if (Route::has('register'))

        @endif
    @endauth
@endif