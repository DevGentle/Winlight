@extends('web.layout')

@section('content')
    <div class="row product-index p-r-l-0">
        <div class="container product-index__header"></div>
    </div>
    <div class="contact-bg">
        <div class="container">
            <div class="contact-index">
                <div class="row">
                    <div class="col-xs-3 contact-index__header-left">ติดต่อ/สอบถาม</div>
                    <div class="col-xs-9 contact-index__header-right">
                        <span>{{ "Tel. 0-2415-7576-7" }}</span><br>
                        <span>{{ "Fax. 0-2415-7578" }}</span><br>
                        <span>{{ "sale_wlc@winnerlight.co.th" }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4 contact-index__content-form">Form</div>
                    <div class="col-xs-8 contact-index__content-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.6524872835043!2d100.63182244621967!3d13.739477172844818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61cfdd2dd24f%3A0x5f8744cb2dbccd3!2s7+%E0%B8%8B%E0%B8%AD%E0%B8%A2+4+Khwaeng+Suan+Luang%2C+Khet+Suan+Luang%2C+Krung+Thep+Maha+Nakhon+10250!5e0!3m2!1sen!2sth!4v1476281447217" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
