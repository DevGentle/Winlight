@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

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
                    <div class="col-xs-4 contact-index__content-form">
                        <form>
                            <div class="form-group">
                                <label>ชื่อผู้มาติดต่อ</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ชื่อผู้มาติดต่อ">
                            </div>
                            <div class="form-group">
                                <label>อีเมลล์</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="อีเมลล์">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="เบอร์โทรศัพท์">
                            </div>
                            <div class="form-group">
                                <label>ข้อความ</label>
                                <textarea class="form-control" rows="11"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                            <button type="reset" class="btn btn-default">ยกเลิก</button>
                        </form>
                    </div>
                    <div class="col-xs-8 contact-index__content-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.0626258499688!2d100.40444921536134!3d13.653954390410824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bd1ca89dcdeb%3A0xb27a3a25108a1515!2sWinnerlight+Corporation!5e0!3m2!1sen!2sth!4v1480522983702" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
