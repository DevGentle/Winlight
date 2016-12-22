@extends('web.layout')

@section('navbar')
    @include('web.main.slidenav')
@endsection

@section('content')
    <div class="row m-l-r-0">
        <div class="col-md-12 story__header">
            <img src="{{ asset('/img/resource/aboutus_header.jpg') }}">
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 story__title">
                <span>รู้จัก วินเนอร์ไลท์</span>
            </div>
            <div class="col-xs-8 col-xs-offset-2 story__description">
                <p>
                    ดำเนินธุรกิจเกี่ยวกับระบบไฟฟ้าแสงสว่างอย่างครบวงจร ซึ่งครอบคลุมตั้งแต่ การผลิต การนำเข้า
                    พร้อมทั้งจัดจำหน่ายผลิตภัณฑ์ดังกล่าวให้ลูกค้า อาทิเช่น โรงแรม อาคารสำนักงาน บ้านจัดสรร
                    คอนโดมิเนียม ศูนย์การค้า โรงงานอุตสาหกรรม คลังสินค้า โรงเรียน มหาวิทยาลัย พิพิธภัณฑ์
                    สนามกีฬา สถานีบริการน้ำมัน โครงการปรับปรุงอุปกรณ์ประหยัดพลังงานในอาคารของรัฐ อาคารควบคุม โรงงานควบคุม ของกรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน กระทรวงพลังงาน ฯลฯ  มีบริการออกแบบระบบแสงสว่างให้เหมาะสมกับการใช้งาน การปรับเปลี่ยนอุปกรณ์ไฟฟ้าเพื่อการประหยัดพลังงานพร้อมทั้งแนะนำการใช้ผลิตภัณฑ์อย่างถูกต้อง เพื่อให้ลูกค้าได้ประโยชน์มากที่สุด
                </p><br>
                <p>
                    บริษัท จำหน่ายผลิตภัณฑ์ภายใต้เครื่องหมายการค้า WINLIGHT สำนักงานใหญ่ตัั้งอยู่เลขที่ 91 ซอยกาญจนาภิเษก 4/1 (หมู่บ้านรัชดาอาคาเดียน) แขวงบางบอน เขตบางบอน กรุงเทพฯ 10150 โทร.0-2415-7576-7 แฟ็กซ์ 0-2415-7578 ทุนจดทะเบียน 10.0 ล้านบาท
                </p><br>
                <p>
                    มี บริษัท วิคเตอร์แมนู แฟคเจอริ่ง จำกัด เป็นโรงงานผู้ผลิตโคมไฟฟ้าทั้งภายในและภายนอกอาคาร เสาไฟ โซล่าเซลล์ LED รวมถึงอุปกรณ์ไฟฟ้าต่างๆที่เกี่ยวกับโคมไฟฟ้า  โรงงานตั้งอยู่เลขที่ 188 หมู่ 1 ตำบลดอนไก่ดี อำเภอกระทุ่มแบน จังหวัดสมุทรสาคร 74110 บนพื้นที่ 5,000 ตารางเมตร ทุนจดทะเบียน 10.0 ล้านบาท ก่อตั้งขึ้นโดยการรวมกลุ่มของผู้มีประสบการณ์ เรื่องโคมไฟฟ้าและอุปกรณ์แสงสว่างมากกว่า10 ปี มีทีมงานวิศวกร ดูแลเรื่องการออกแบบผลิตภัณฑ์ให้มีความสวยงาม คงทน มีความปลอดภัยต่อผู้ใช้งาน ด้วยโปรแกรมออกแบบที่ทันสมัย มีผู้เชี่ยวชาญในสายการผลิต พัฒนาโคมไฟฟ้าให้มีการประหยัดพลังงานมากขึ้น คำนวณผลของการประหยัด
                    เปรียบเทียบก่อนและหลังเปลี่ยน รวมถึงรับผลิตโคมไฟฟ้าภายใต้แบรนด์ต่างๆ และเป็นตัวแทนจำหน่ายโคมไฟและอุปกรณ์ภายใต้เครื่องหมายการค้า PHIPIPS
                </p><br>
                <p>
                    ทางบริษัทมีเป้าหมายในการสร้างความประทับ ใจในสินค้าและบริการสูงสุดให้แก่ลูกค้าบริษัทได้ปรับปรุงวิธีการทำงาน นำนวัตกรรมใหม่ๆ และเทคโนโลยีที่ทันสมัย เข้ามาปรับใช้อยู่ตลอดเวลาเพื่อให้สินค้ามีคุณภาพและหลากหลายตอบ สนองความต้องการของลูกค้าได้มากสุด ได้มาตรฐานตามสำนักมาตรฐานผลิตภัณฑ์ อุตสาหกรรม (สมอ.) และการบริหารงานคุณภาพ ISO9001:2008
                </p>
            </div>
        </div>
    </div>
@endsection
