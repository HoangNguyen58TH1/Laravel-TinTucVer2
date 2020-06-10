<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // $this->call(TheLoaiTableSeeder::class);
        // $this->call(LoaiTinTableSeeder::class);
        // $this->call(TinTucTableSeeder::class);
        $this->call(SlideTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        //
        DB::table('users')->insert([
                'name' => 'boss',
                'email' => 'boss@gmail.canh',
                'password' => bcrypt('123456'),
                'quyen' => 1,
                'created_at' => new DateTime()
            ]);
        /*for($i = 1; $i <= 10;$i++)
        {
        	DB::table('Users')->insert(
	        	[
	        		'name' => 'User_'.$i,
	            	'email' => 'user_'.$i.'@mymail.com',
	            	'password' => bcrypt('123456'),
	            	'quyen'=> 0,
	            	'created_at' => new DateTime(),
	        	]
        	);
        }*/
    }
}

class SlideTableSeeder extends Seeder
{
    public function run()
    {
        //
        for($i = 1;$i <= 3;$i++)
        {
            DB::table('slide')->insert(
                [
                    'Ten' => 'Slide'.$i,
                    'Hinh' => $i.'.jpg',
                    'NoiDung' => 'NoiDung',
                    'link' => 'google.com',
                    'created_at' => new DateTime()
                ]

            );
        }

    }
}

class TinTucTableSeeder extends Seeder
{
    public function run()
    {
    	// $NoiDung = "
    	// </h3>Nội dung tin tức: Khoá học Lập trình PHP tại trung tâm đào tạo tin học khoa phạm</h3>
    	// <p>
    	// <b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	// <b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	// <b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	// <b>Website</b>: khoapham.vn<br>
    	// <b>Học Online tại :</b>online.khoapham.vn<br>
    	// </p>
    	// ";
    	// $NoiDung = "
    	// <p>
    	// <b>Đây là phần nội dung của tin tức này.<br></b>
    	// <b>Đây là phần nội dung của tin tức này.<br></b>
    	// <b>Đây là phần nội dung của tin tức này.<br></b>
        // </p>
    	// ";
    	$NoiDung = "
        Đây là phần nội dung của tin tức này.
        Đây là phần nội dung của tin tức này.
        Đây là phần nội dung của tin tức này.
    	";
        DB::table('TinTuc')->insert([
            ['idLoaiTin'=>'1','TieuDe' => 'Lần đầu ĐH FPT cấp học bổng tiến sĩ ','TieuDeKhongDau' => 'Lan-Dau-Dh-Fpt-Cap-Hoc-Bong-Tien-Si','TomTat' => 'Bên cạnh 400 suất học bổng Nguyễn Văn Đạo, ĐH FPT lần đầu tiên chọn ra 30 học sinh xuất sắc nhất để cấp học bổng toàn phần đào tạo từ cử nhân lên thẳng tiến sĩ, với tổng giá trị quỹ lên tới 5 triệu USD.','NoiDung' => $NoiDung,'Hinh' => 'FPT-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'1','TieuDe' => '300 tỷ đồng phát triển giáo dục mầm non ','TieuDeKhongDau' => '300-Ty-Dong-Phat-Trien-Giao-Duc-Mam-Non','TomTat' => 'Bộ Giáo dục và Đào tạo đang xây dựng chương trình, mục tiêu quốc gia về giáo dục giai đoạn 2011-2015, trong đó dự kiến chi 300 tỷ đồng để phát triển giáo dục mầm non năm 2011. ','NoiDung' => $NoiDung,'Hinh' => 'tre_em_set_sub.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Những nụ hôn ngọt ngào trong đêm tình nhân ','TieuDeKhongDau' => 'Nhung-Nu-Hon-Ngot-Ngao-Trong-Dem-Tinh-Nhan','TomTat' => 'Tối 13/2, hàng nghìn bạn trẻ có mặt tại cầu Ánh Sao (quận 7, TP HCM) chứng kiến những lời tỏ tình cùng những nụ hôn ngọt ngào của 100 cặp tình nhân trong "Đêm Valentine thế kỷ". ','NoiDung' => $NoiDung,'Hinh' => '250h_jpg_thumb210x0_ns.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'2','TieuDe' => 'Hot girl tâm sự về ngày Valentine ','TieuDeKhongDau' => 'Hot-Girl-Tam-Su-Ve-Ngay-Valentine','TomTat' => 'Một bông hồng trắng bằng khăn giấy, chiếc xe đạp gắn đầy hoa, hay bài thơ của chàng "thi sĩ" vô danh gửi tặng… là những món quà đầy ấn tượng mà hot girl Midu từng nhận được trong các mùa Valentine. ','NoiDung' => $NoiDung,'Hinh' => 'hot-girl-valentine-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Một mình ở Thái Lan ','TieuDeKhongDau' => 'Mot-Minh-O-Thai-Lan','TomTat' => 'Không quá ồn ã tấp nập như Hong Kong, hay quá yên bình như Hội An, Bangkok khiến cho tôi cảm thấy vô cùng phấn khích, tựa hồ như vừa thức giấc sau một cơn ngủ say. Bạn Nguyễn Anh Ngọc viết. ','NoiDung' => $NoiDung,'Hinh' => 'top1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Trai Hà thành trổ tài vật cầu đầu xuân','TieuDeKhongDau' => 'Trai-Ha-Thanh-Tro-Tai-Vat-Cau-Dau-Xuan','TomTat' => 'Những pha tranh cướp quyết liệt cùng những tiếng cười vui là hình ảnh về lễ hội vật cầu đầu xuân của các thanh niên làng Thúy Lĩnh, quận Hoàng Mai (Hà Nội), diễn ra chiều 8/2 (6 Tết). ','NoiDung' => $NoiDung,'Hinh' => '130.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'4','TieuDe' => 'Du học hè Singapore 2011','TieuDeKhongDau' => 'Du-Hoc-He-Singapore-2011','TomTat' => 'Đăng ký trước ngày 29/1, học sinh sẽ được tặng 6 triệu đồng khi tham gia lịch trình 4 tuần ở tại resort và tặng 4 triệu đồng cho học sinh tham gia lịch trình 2 hoặc 3 tuần ở tại resort.','NoiDung' => $NoiDung,'Hinh' => '400.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'4','TieuDe' => 'Chương trình trung học tại Canada','TieuDeKhongDau' => 'Chuong-Trinh-Trung-Hoc-Tai-Canada','TomTat' => 'Bà Birgit Hartel, Giám đốc tuyển sinh nhóm các trường công lập River East Transcona, tỉnh Manitoba, Canada sẽ giới thiệu về môi trường sống và học tập từ 18h đến 20h ngày 21/1 tại số 22 phố Phạm Huy Thông, Ba Đình, Hà Nội.','NoiDung' => $NoiDung,'Hinh' => 'New-Image250.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'5','TieuDe' => 'Vợ đánh hổ cứu chồng','TieuDeKhongDau' => 'Vo-Danh-Ho-Cuu-Chong','TomTat' => 'Một phụ nữ ở phía bắc Malaysia đánh hổ bằng muỗng gỗ khi con thú tấn công chồng bà, nhờ đó người đàn ông thoát chết.','NoiDung' => $NoiDung,'Hinh' => 'tiger.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'5','TieuDe' => 'Nga đưa tên lửa tối tân lên đảo tranh chấp với Nhật','TieuDeKhongDau' => 'Nga-Dua-Ten-Lua-Toi-Tan-Len-Dao-Tranh-Chap-Voi-Nhat','TomTat' => 'Matxcơva sẽ triển khai hệ thống tên lửa phòng không hiện đại tầm ngắn và trung lên các đảo tranh chấp với Nhật Bản, quan chức cấp cao của Bộ Tổng tham mưu Nga cho biết hôm nay.','NoiDung' => $NoiDung,'Hinh' => 's400.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'6','TieuDe' => 'Làn sóng biểu tình khắp thế giới Ảrập','TieuDeKhongDau' => 'Lan-Song-Bieu-Tinh-Khap-The-Gioi-Arap','TomTat' => 'Cuộc lật đổ chế độ của người dân Ai Cập gây ra hiệu ứng domino trên toàn thế giới Ảrập, khi người dân các nước trong khu vực liên tiếp đổ ra đường đòi hạ bệ chính phủ.','NoiDung' => $NoiDung,'Hinh' => 'arap1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'6','TieuDe' => 'Tập trận Hổ mang Vàng 2011','TieuDeKhongDau' => 'Tap-Tran-Ho-Mang-Vang-2011','TomTat' => 'Cuộc tập trận trên bộ lớn nhất thế giới năm nay nhằm đánh dấu 30 năm ra đời sự kiện, trong đó tập trung vào huấn luyện kỹ năng quân sự cơ bản, lên kế hoạch nhân sự và các dự án hỗ trợ nhân đạo.','NoiDung' => $NoiDung,'Hinh' => 'gold1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'7','TieuDe' => 'Tiệm hoa ở Little Saigon rộn ràng ngày Tình yêu','TieuDeKhongDau' => 'Tiem-Hoa-O-Little-Saigon-Ron-Rang-Ngay-Tinh-Yeu','TomTat' => 'Các tiệm hoa ở Little Saigon, quận Cam, California, tấp nập người mua bán trong ngày Tình yêu sáng qua.','NoiDung' => $NoiDung,'Hinh' => 'valentine3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'7','TieuDe' => 'Nên ở lại Mỹ hay về Việt Nam?','TieuDeKhongDau' => 'Nen-O-Lai-My-Hay-Ve-Viet-Nam-','TomTat' => 'Tôi không xinh, và với tuổi tác hiện nay, tôi sợ không biết liệu về Việt Nam có thể có tìm được cho mình một hạnh phúc riêng hay không.','NoiDung' => $NoiDung,'Hinh' => 'tt1_1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'8','TieuDe' => 'Mỹ - Nga và hiệp ước vũ khí hạt nhân lịch sử','TieuDeKhongDau' => 'My---Nga-Va-Hiep-Uoc-Vu-Khi-Hat-Nhan-Lich-Su','TomTat' => 'Hiệp ước Start mới giữa Mỹ và Nga sắp chính thức có hiệu lực, mở ra một chương mới trong lịch sử vũ khí hạt nhân, giúp phần còn lại của thế giới "yên tâm" hơn vì hai cường quốc nguyên tử đã có nhượng bộ đáng kể.','NoiDung' => $NoiDung,'Hinh' => '','NoiBat' => 1],
            ['idLoaiTin'=>'8','TieuDe' => 'Bán đảo Triều Tiên đang căng như dây đàn','TieuDeKhongDau' => 'Ban-Dao-Trieu-Tien-Dang-Cang-Nhu-Day-Dan','TomTat' => 'Hàn Quốc chiều nay quyết không nhượng bộ khi vẫn tập trận bắn đạn thật trên đảo Yeonpyeong. Miền bắc chưa có phản ứng nào như họ đe doạ, nhưng sự kiện này đã đẩy bán đảo Triều Tiên vào thế "căng như dây đàn". ','NoiDung' => $NoiDung,'Hinh' => 'HanQuoc.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'9','TieuDe' => 'Giai nhân chứng khoán','TieuDeKhongDau' => 'Giai-Nhan-Chung-Khoan','TomTat' => 'Người đẹp luôn là tâm điểm trong bất kỳ lĩnh vực nào và chứng khoán không phải ngoại lệ. Chính vì điều này một số công ty chứng khoán đã có chủ trương tuyển nữ nhân viên môi giới có ngoại hình đẹp.','NoiDung' => $NoiDung,'Hinh' => 'giai-nhan.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'9','TieuDe' => 'Hoàng Anh Gia Lai nhận xếp hạng tín nhiệm điểm B','TieuDeKhongDau' => 'Hoang-Anh-Gia-Lai-Nhan-Xep-Hang-Tin-Nhiem-Diem-B','TomTat' => 'Hãng đánh giá tín nhiệm Standard & Poors vừa công bố mức đánh giá đối với các khoản tín dụng dài hạn của Tập đoàn Hoàng Anh Gia Lai. Đây là lần đầu tiên một doanh nghiệp tư nhân của Việt Nam được S&P xếp hạng.','NoiDung' => $NoiDung,'Hinh' => 'HAGL-0.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'10','TieuDe' => 'Bàn giao 251 căn nhà phố tại dự án EcoLakes Mỹ Phước','TieuDeKhongDau' => 'Ban-Giao-251-Can-Nha-Pho-Tai-Du-An-Ecolakes-My-Phuoc','TomTat' => 'Ngày 18/12, Công ty cổ phần SetiaBecamex đã bàn giao 251 căn nhà phố thuộc khu Vườn Thiên Đàng, giai đoạn một của dự án khu đô thị sinh thái EcoLakes Mỹ Phước rộng 226 ha.','NoiDung' => $NoiDung,'Hinh' => 'duan3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'10','TieuDe' => 'Đề xuất lập Quỹ tiết kiệm nhà ở','TieuDeKhongDau' => 'De-Xuat-Lap-Quy-Tiet-Kiem-Nha-O','TomTat' => 'Quỹ tiết kiệm nhà ở sẽ được xây dựng giống như hình thức bảo hiểm xã hội với mức đóng góp dự kiến từ 1 - 2% tổng tiền lương hàng tháng của người lao động.','NoiDung' => $NoiDung,'Hinh' => 'ld1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'11','TieuDe' => 'Tỷ phú Ấn mất 2,6 tỷ USD một ngày vì tin đồn','TieuDeKhongDau' => 'Ty-Phu-An-Mat-2,6-Ty-Usd-Mot-Ngay-Vi-Tin-Don','TomTat' => 'Hôm qua, chỉ trong một phiên giao dịch, tỷ phú Anil Ambani (Ấn Độ) mất 2,6 tỷ USD vì những tin đồn thất thiệt. ','NoiDung' => $NoiDung,'Hinh' => 'anil.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'11','TieuDe' => 'Chàng giảng viên mê kinh doanh với Google','TieuDeKhongDau' => 'Chang-Giang-Vien-Me-Kinh-Doanh-Voi-Google','TomTat' => 'Trong một lần sang Singapore, Nguyễn Khánh Trình choáng váng trước tốc độ lướt web và khả năng online marketing của người dân nơi đây. Và chàng trai trẻ lóe lên suy nghĩ sẽ bắt tay với Google để kinh doanh.','NoiDung' => $NoiDung,'Hinh' => 'mr-T.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'12','TieuDe' => 'Bao cao su ăn theo lễ cưới Hoàng tử Anh','TieuDeKhongDau' => 'Bao-Cao-Su-An-Theo-Le-Cuoi-Hoang-Tu-Anh','TomTat' => 'Trong khi nước Anh đang nhộn nhịp chuẩn bị cho lễ cưới của Hoàng tử William, những nhà sản xuất nhanh nhạy đã tung ra loại bao cao su in hình đôi uyên ương sắp cưới.','NoiDung' => $NoiDung,'Hinh' => 'capt_photo_1296335303341-1-0.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'12','TieuDe' => 'Kinh tế Mỹ tăng trưởng ấn tượng','TieuDeKhongDau' => 'Kinh-Te-My-Tang-Truong-An-Tuong','TomTat' => 'GDP đi lên với tốc độ nhanh nhất trong vòng 5 năm trở lại đây, theo số liệu từ Bộ Thương mại Mỹ.','NoiDung' => $NoiDung,'Hinh' => '3_Econ2-popup.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'13','TieuDe' => 'Tuần lễ vui xuân cùng MBCare Group','TieuDeKhongDau' => 'Tuan-Le-Vui-Xuan-Cung-Mbcare-Group','TomTat' => 'Chào đón xuân Tân Mão, từ ngày 6 đến 13/2 (mùng 4 đến 11/1 âm lịch), MBCare Group tổ chức tuần lễ "Mẹ & Bé vui Xuân, tưng bừng mua sắm" tại nhà Văn hóa Lao động, 55B Nguyễn Thị Minh Khai, quận 1, TP HCM.','NoiDung' => $NoiDung,'Hinh' => 'mevabe.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'13','TieuDe' => 'Sản phẩm gia dụng thông minh giúp tiết kiệm thời gian','TieuDeKhongDau' => 'San-Pham-Gia-Dung-Thong-Minh-Giup-Tiet-Kiem-Thoi-Gian','TomTat' => 'Các sản phẩm gia dụng thông minh đều có điểm chung là nhằm mục đích mang lại cho các bà nội trợ hiện đại bận rộn những giải pháp tiết kiệm thời gian ưu việt và hiệu quả nhất.','NoiDung' => $NoiDung,'Hinh' => 'hanggiadung.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'14','TieuDe' => 'Isuzu Việt Nam khai trương I-mark Salon An Sương','TieuDeKhongDau' => 'Isuzu-Viet-Nam-Khai-Truong-I-Mark-Salon-An-Suong','TomTat' => 'I-mark Salon An Sương - đại lý ủy quyền thứ 7 của Isuzu tại miền Nam - khai trương và đi vào hoạt động vào ngày 20/1, nâng tổng số đại lý ôtô và trung tâm bảo hành trên toàn quốc lên con số 15.','NoiDung' => $NoiDung,'Hinh' => '430.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'14','TieuDe' => 'Panadol chung tay chăm sóc sức khỏe cộng đồng','TieuDeKhongDau' => 'Panadol-Chung-Tay-Cham-Soc-Suc-Khoe-Cong-Dong','TomTat' => 'Các bác sĩ, dược sĩ trường đại học Y Dược dưới sự tài trợ của nhãn hàng Panadol đã cùng triển khai hành trình “Chung tay chăm sóc sức khỏe cộng đồng” lần II.','NoiDung' => $NoiDung,'Hinh' => '1 (2)_2.JPG','NoiBat' => 1],
            ['idLoaiTin'=>'15','TieuDe' => 'Thùy Dung - Ngọc Hân đọ dáng tại Tuần lễ thời trang','TieuDeKhongDau' => 'Thuy-Dung---Ngoc-Han-Do-Dang-Tai-Tuan-Le-Thoi-Trang','TomTat' => 'Hai Hoa hậu Việt Nam hội ngộ trong đêm trình diễn bộ sưu tập của 20 nhà thiết kế Bắc - Nam dự báo khuynh hướng thời trang xuân hè 2011, tối 4/12 tại dinh thự của Tổng lãnh sự quán Pháp ở TP HCM.','NoiDung' => $NoiDung,'Hinh' => 'thuy-dung---ngoc-han-2.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'15','TieuDe' => 'Người đẹp Miss Earth khoe đường cong với bikini','TieuDeKhongDau' => 'Nguoi-Dep-Miss-Earth-Khoe-Duong-Cong-Voi-Bikini','TomTat' => 'Trong các trang phục áo tắm gợi cảm, 14 gương mặt sáng giá nhất cuộc thi Hoa hậu Trái đất 2010 tự tin sải bước trên sân khấu đêm chung kết, khoe chân thon, hình thể đẹp.','NoiDung' => $NoiDung,'Hinh' => 'Czech.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'16','TieuDe' => 'Người đẹp xứ Hàn rực rỡ sắc hồng','TieuDeKhongDau' => 'Nguoi-Dep-Xu-Han-Ruc-Ro-Sac-Hong','TomTat' => 'Hơn 20 gương mặt ‘sao’ nữ xinh đẹp của đất nước kim chi vừa cùng nhau chụp bộ ảnh thời trang ấn tượng để gây quỹ cho chương trình từ thiện Pink Wings của tạp chí Vogue Girl.','NoiDung' => $NoiDung,'Hinh' => '1 (1)_9.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'16','TieuDe' => 'Lê Khánh hối hận vì ngăn cản tình yêu của mẹ','TieuDeKhongDau' => 'Le-Khanh-Hoi-Han-Vi-Ngan-Can-Tinh-Yeu-Cua-Me','TomTat' => 'Nàng Quyên cá tính trong Cô dâu đại chiến chia sẻ, mỗi khi nhớ lại thời tuổi trẻ nổi loạn, luôn tìm cách ngăn cản những người bạn trai muốn đến với mẹ khi ba đã mất, lòng cô lại dấy lên sự hối hận.','NoiDung' => $NoiDung,'Hinh' => 'le-khanh-co-dau-dai-chien.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'17','TieuDe' => 'Sao Mai Hoài Nam bán xe biển tứ quý làm album','TieuDeKhongDau' => 'Sao-Mai-Hoai-Nam-Ban-Xe-Bien-Tu-Quy-Lam-Album','TomTat' => 'Hoàng tử rock Sao Mai Điểm hẹn 2010 sẵn sàng bán hai chiếc xe máy biển 6789 và 8888 để đầu tư cho sản phẩm âm nhạc đầu tay.','NoiDung' => $NoiDung,'Hinh' => 'hoai-nam-1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'17','TieuDe' => 'Gia đình Phạm Duy hội tụ dịp Tết','TieuDeKhongDau' => 'Gia-Dinh-Pham-Duy-Hoi-Tu-Dip-Tet','TomTat' => 'Các con của người nhạc sĩ nổi tiếng: Duy Quang, Duy Cường, Thái Thảo, Tuấn Ngọc về Việt Nam đón Tết. Đây là lần đầu tiên sau 36 năm họ có cơ hội đoàn tụ bên nhau trong không khí xuân quê nhà.','NoiDung' => $NoiDung,'Hinh' => 'gia-dinh-pham-duy.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'18','TieuDe' => 'Siêu mẫu lả lướt với Sắc xuân','TieuDeKhongDau' => '','TomTat' => 'Trang Nhung, Ngọc Bích, Thùy Linh... xuất hiện đằm thắm, nhẹ nhàng với các trang phục mùa xuân trong đêm thời trang Phong cách trẻ, tối 19/1 tại TP HCM.','NoiDung' => $NoiDung,'Hinh' => 'trang-nhun-g19.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'18','TieuDe' => 'Trali đón Tết với Hơi thở mùa xuân','TieuDeKhongDau' => '','TomTat' => 'Lấy cảm hứng từ sắc hoa rực rỡ của mùa xuân đang tới, các nhà thiết kế Trali trình làng bộ sưu tập mang tên “Hơi thở mùa xuân”.','NoiDung' => $NoiDung,'Hinh' => 't1_3.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'19','TieuDe' => 'Nicole Kidman khóc khi được đề cử Oscar lần 3','TieuDeKhongDau' => 'Nicole-Kidman-Khoc-Khi-Duoc-De-Cu-Oscar-Lan-3','TomTat' => 'Khi biết được đề cử giải Nữ diễn viên chính xuất sắc, thiên nga Australia òa khóc trong hạnh phúc. Tuy nhiên, những giọt nước mắt của Nicole khiến cô con gái hai tuổi Sunday băn khoăn về trạng thái cảm xúc của mẹ.','NoiDung' => $NoiDung,'Hinh' => 'sag_arrivals_3_57_wenn3186609.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'19','TieuDe' => 'Phim Tết của Trương Bá Chi lép vế','TieuDeKhongDau' => 'Phim-Tet-Cua-Truong-Ba-Chi-Lep-Ve','TomTat' => 'Phim hài Tối cường hỷ sự được quảng bá rầm rộ của Trương Bá Chi, Lưu Gia Linh, Cổ Thiên Lạc chỉ về thứ hai trên bảng xếp hạng phim Tết, xếp sau I Love Hong Hong, tác phẩm có hơn 100 diễn viên góp mặt.','NoiDung' => $NoiDung,'Hinh' => 'Toi_cuong_hy_su.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'20','TieuDe' => 'Triển lãm bộ tranh dân gian Hàng Trống quý hiếm','TieuDeKhongDau' => 'Trien-Lam-Bo-Tranh-Dan-Gian-Hang-Trong-Quy-Hiem','TomTat' => '149 bức tranh thuộc dòng tranh cổ quý giá của Hà Nội, thu thập trong vòng 10 năm, được nhà sưu tầm Phạm Đức Sĩ trưng bày tại Trung tâm nghệ thuật Việt, Hà Nội từ 9/9.','NoiDung' => $NoiDung,'Hinh' => 'Ly-ngu-vong-Nguyet.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'20','TieuDe' => 'Nỗi nhớ Hà Nội qua ống kính','TieuDeKhongDau' => '','TomTat' => 'Các tác giả tham dự cuộc thi nhiếp ảnh Nỗi nhớ Hà Nội mang đến những góc thủ đô yên bình, phảng phất hồn quê mà vẫn nóng hổi hơi thở cuộc sống đương đại.','NoiDung' => $NoiDung,'Hinh' => 'Ho-Tay---Tac-gia-Dao-Ngo.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'21','TieuDe' => 'Ronaldo người Brazil quyết định giải nghệ','TieuDeKhongDau' => 'Ronaldo-Nguoi-Brazil-Quyet-Dinh-Giai-Nghe','TomTat' => 'Thông báo chính thức sẽ được tiền đạo kỳ cựu đang khoác áo Corinthians đưa ra trong hôm nay.','NoiDung' => $NoiDung,'Hinh' => 'Ronaldo.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'21','TieuDe' => 'Barca mất trụ cột khi tái ngộ Arsenal','TieuDeKhongDau' => 'Barca-Mat-Tru-Cot-Khi-Tai-Ngo-Arsenal','TomTat' => 'HLV Pep Guardiola cho biết trung vệ Carles Puyol gần như chắc chắn sẽ vắng mặt trong trận lượt đi vòng 16 đội Champions League thứ tư tuần sau.','NoiDung' => $NoiDung,'Hinh' => 'puyol.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'22','TieuDe' => 'Nadal so tài chơi bóng bàn với đạo diễn Spacey','TieuDeKhongDau' => 'Nadal-So-Tai-Choi-Bong-Ban-Voi-Dao-Dien-Spacey','TomTat' => 'Ngôi sao quần vợt và đạo diễn người Mỹ có một màn đánh bóng bàn hài hước trong lễ trao giải thưởng thể thao Laureus tối thứ hai ở Abu Dhabi, Các tiểu vương quốc Ảrập thống nhất.','NoiDung' => $NoiDung,'Hinh' => 'nadal.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'22','TieuDe' => 'Kim Clijsters coi nhẹ việc soán ngôi số một','TieuDeKhongDau' => 'Kim-Clijsters-Coi-Nhe-Viec-Soan-Ngoi-So-Mot','TomTat' => 'Chỉ cần thắng thêm 2 trận nữa để soán ngôi của đàn em Caroline Wozniacki, nhưng nhà tân vô địch đơn nữ Australia mở rộng khẳng định đây không phải là điều cô bận tâm nhất.','NoiDung' => $NoiDung,'Hinh' => 'Kim-caroline.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'23','TieuDe' => 'Sao thể thao Mỹ khoe mình nghệ thuật trên mặt báo','TieuDeKhongDau' => 'Sao-The-Thao-My-Khoe-Minh-Nghe-Thuat-Tren-Mat-Bao','TomTat' => 'Tim Howard, ngôi sao thủ môn của Everton, là một trong nhiều gương mặt được tạp chí ESPN Sport mời làm mẫu trong ấn phẩm "Body Issue", tập hợp nhiều gương mặt nổi tiếng khác của làng thể thao Mỹ.','NoiDung' => $NoiDung,'Hinh' => '1 (7)_1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'23','TieuDe' => 'Mỹ nhân của làng billiards Hàn Quốc','TieuDeKhongDau' => 'My-Nhan-Cua-Lang-Billiards-Han-Quoc','TomTat' => 'Không chỉ có những đường cơ độc đáo và tiến bộ nhảy vọt về thành tích, Yu Ram Cha còn nổi tiếng nhờ nhan sắc đậm nét Á Đông.','NoiDung' => $NoiDung,'Hinh' => 'a16.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'24','TieuDe' => 'Biếm họa về sự kiện Dalglish trở lại dẫn dắt Liverpool','TieuDeKhongDau' => 'Biem-Hoa-Ve-Su-Kien-Dalglish-Tro-Lai-Dan-Dat-Liverpool','TomTat' => 'Kenny Dalglish có thể là "vua" trong lòng nhiều thế hệ người hâm mộ Liverpool, nhưng sự xuất hiện của ông chưa thể giúp đội bóng thành phố cảng nước Anh hồi sinh ngay lập tức.','NoiDung' => $NoiDung,'Hinh' => 'liverpool10.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'24','TieuDe' => 'Kỳ thủ Quang Liêm rộng cửa bảo vệ ngôi vô địch ở Nga','TieuDeKhongDau' => 'Ky-Thu-Quang-Liem-Rong-Cua-Bao-Ve-Ngoi-Vo-Dich-O-Nga','TomTat' => 'Tối 14/2 đại kiện tướng cờ vua số một của Việt Nam xuất sắc đánh bại kỳ thủ chủ nhà Kobalia Mikhail (elo 2666), qua đó tạo khoảng cách một điểm với nhóm phía sau khi giải Aeroflot tại Moscow chỉ còn 2 ván.','NoiDung' => $NoiDung,'Hinh' => 'liem.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'25','TieuDe' => 'Băng cướp của sinh viên bị bắt','TieuDeKhongDau' => 'Bang-Cuop-Cua-Sinh-Vien-Bi-Bat','TomTat' => 'Bị cảnh sát phát lệnh truy nã về tội cướp tài sản nhưng Vũ (20 tuổi) vẫn lôi kéo một số người cùng quê liên tục gây ra các vụ cướp ở Hà Nội, trong số này có 2 sinh viên. Trong 3 tháng, chúng thực hiện trót lọt gần 20 vụ.','NoiDung' => $NoiDung,'Hinh' => 'cuop (2).jpg','NoiBat' => 1],
            ['idLoaiTin'=>'25','TieuDe' => 'Toán cướp bắt cóc nữ sinh viên giữa ban ngày','TieuDeKhongDau' => 'Toan-Cuop-Bat-Coc-Nu-Sinh-Vien-Giua-Ban-Ngay','TomTat' => 'Sau vụ va chạm giao thông, 4 thanh niên lặng lẽ bám theo đôi trai gái đến khu vực nghĩa trang Mai Dịch (Hà Nội) rồi cướp lắc và dây chuyền bạc. Bạn gái của nạn nhân cũng bị chúng ép lên xe chở đi.','NoiDung' => $NoiDung,'Hinh' => 'giai-cuu.jpg','NoiBat' => 1],
    	]);
    }
}

// class TheLoaiTableSeeder extends Seeder
// {
//     public function run()
//     {

//     	DB::table('TheLoai')->insert([
//         	['Ten' => 'Xã Hội','TenKhongDau' => 'Xa-Hoi'],
//         	['Ten' => 'Thế Giới','TenKhongDau' => 'The-Gioi'],
//         	['Ten' => 'Kinh Doanh','TenKhongDau' => 'Kinh-Doanh'],
//         	['Ten' => 'Văn Hoá','TenKhongDau' => 'Van-Hoa'],
//         	['Ten' => 'Thể Thao','TenKhongDau' => 'The-Thao'],
//         	['Ten' => 'Pháp Luật','TenKhongDau' => 'Phap-Luat'],
//         	['Ten' => 'Đời Sống','TenKhongDau' => 'Doi-Song'],
//         	['Ten' => 'Khoa Học','TenKhongDau' => 'Khoa-Hoc'],
//         	['Ten' => 'Vi Tính','TenKhongDau' => 'Vi-Tinh']
//     	]);

//     }
// }

class LoaiTinTableSeeder extends Seeder
{
    // public function run()
    // {
    //     //
    //     DB::table('LoaiTin')->insert([
    //     	['idTheLoai'=>'1','Ten' => 'Giáo Dục','TenKhongDau' => 'Giao-Duc'],
    //     	['idTheLoai'=>'1','Ten' => 'Nhịp Điệu Trẻ','TenKhongDau' => 'Nhip-Dieu-Tre'],
    //     	['idTheLoai'=>'1','Ten' => 'Du Lịch','TenKhongDau' => 'Du-Lich'],
    //     	['idTheLoai'=>'1','Ten' => 'Du Học','TenKhongDau' => 'Du-Hoc'],
    //     	['idTheLoai'=>'2','Ten' => 'Cuộc Sống Đó Đây','TenKhongDau' => 'Cuoc-Song-Do-Day'],
    //     	['idTheLoai'=>'2','Ten' => 'Ảnh','TenKhongDau' => 'Anh'],
    //     	['idTheLoai'=>'2','Ten' => 'Người Việt 5 Châu','TenKhongDau' => 'Nguoi-Viet-5-Chau'],
    //     	['idTheLoai'=>'2','Ten' => 'Phân Tích','TenKhongDau' => 'Phan-Tich'],
    //     	['idTheLoai'=>'3','Ten' => 'Chứng Khoán','TenKhongDau' => 'Chung-Khoan'],
    //     	['idTheLoai'=>'3','Ten' => 'Bất Động Sản','TenKhongDau' => 'Bat-Dong-San'],
    //     	['idTheLoai'=>'3','Ten' => 'Doanh Nhân','TenKhongDau' => 'Doanh-Nhan'],
    //     	['idTheLoai'=>'3','Ten' => 'Quốc Tế','TenKhongDau' => 'Quoc-Te'],
    //     	['idTheLoai'=>'3','Ten' => 'Mua Sắm','TenKhongDau' => 'Mua-Sam'],
    //     	['idTheLoai'=>'3','Ten' => 'Doanh Nghiệp Viết','TenKhongDau' => 'Doanh-Nghiep-Viet'],
    //     	['idTheLoai'=>'4','Ten' => 'Hoa Hậu','TenKhongDau' => 'Hoa-Hau'],
    //     	['idTheLoai'=>'4','Ten' => 'Nghệ Sỹ','TenKhongDau' => 'Nghe-Sy'],
    //     	['idTheLoai'=>'4','Ten' => 'Âm Nhạc','TenKhongDau' => 'Am-Nhac'],
    //     	['idTheLoai'=>'4','Ten' => 'Thời Trang','TenKhongDau' => 'Thoi-Trang'],
    //     	['idTheLoai'=>'4','Ten' => 'Điện Ảnh','TenKhongDau' => 'Dien-Anh'],
    //     	['idTheLoai'=>'4','Ten' => 'Mỹ Thuật','TenKhongDau' => 'My-Thuat'],
    //     	['idTheLoai'=>'5','Ten' => 'Bóng Đá','TenKhongDau' => 'Bong-Da'],
    //     	['idTheLoai'=>'5','Ten' => 'Tennis','TenKhongDau' => 'Tennis'],
    //     	['idTheLoai'=>'5','Ten' => 'Chân Dung','TenKhongDau' => 'Chan-Dung'],
    //     	['idTheLoai'=>'5','Ten' => 'Ảnh','TenKhongDau' => 'Anh-TT'],
    //     	['idTheLoai'=>'6','Ten' => 'Hình Sự','TenKhongDau' => 'Hinh-Su']
    // 	]);
    // }
    public function run()
    {
        //
        DB::table('LoaiTin')->insert([
        	['Ten' => 'Giáo Dục','TenKhongDau' => 'Giao-Duc'],
        	['Ten' => 'Nhịp Điệu Trẻ','TenKhongDau' => 'Nhip-Dieu-Tre'],
        	['Ten' => 'Du Lịch','TenKhongDau' => 'Du-Lich'],
        	['Ten' => 'Du Học','TenKhongDau' => 'Du-Hoc'],
        	['Ten' => 'Cuộc Sống Đó Đây','TenKhongDau' => 'Cuoc-Song-Do-Day'],
        	['Ten' => 'Ảnh','TenKhongDau' => 'Anh'],
        	['Ten' => 'Người Việt 5 Châu','TenKhongDau' => 'Nguoi-Viet-5-Chau'],
        	['Ten' => 'Phân Tích','TenKhongDau' => 'Phan-Tich'],
        	['Ten' => 'Chứng Khoán','TenKhongDau' => 'Chung-Khoan'],
        	['Ten' => 'Bất Động Sản','TenKhongDau' => 'Bat-Dong-San'],
        	['Ten' => 'Doanh Nhân','TenKhongDau' => 'Doanh-Nhan'],
        	['Ten' => 'Quốc Tế','TenKhongDau' => 'Quoc-Te'],
        	['Ten' => 'Mua Sắm','TenKhongDau' => 'Mua-Sam'],
        	['Ten' => 'Doanh Nghiệp Viết','TenKhongDau' => 'Doanh-Nghiep-Viet'],
        	['Ten' => 'Hoa Hậu','TenKhongDau' => 'Hoa-Hau'],
        	['Ten' => 'Nghệ Sỹ','TenKhongDau' => 'Nghe-Sy'],
        	['Ten' => 'Âm Nhạc','TenKhongDau' => 'Am-Nhac'],
        	['Ten' => 'Thời Trang','TenKhongDau' => 'Thoi-Trang'],
        	['Ten' => 'Điện Ảnh','TenKhongDau' => 'Dien-Anh'],
        	['Ten' => 'Mỹ Thuật','TenKhongDau' => 'My-Thuat'],
        	['Ten' => 'Bóng Đá','TenKhongDau' => 'Bong-Da'],
        	['Ten' => 'Tennis','TenKhongDau' => 'Tennis'],
        	['Ten' => 'Chân Dung','TenKhongDau' => 'Chan-Dung'],
        	['Ten' => 'Ảnh','TenKhongDau' => 'Anh-TT'],
        	['Ten' => 'Hình Sự','TenKhongDau' => 'Hinh-Su']
    	]);
    }
}

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        //
    	$NoiDung = array(
    		'Bài viết rất hay',
    		'Tôi rất thích bài viết này',
    		'Bài viết này tạm ổn',
    		'Hay quá trời',
    		'Tôi sẽ học thèo bài viết này',
    		'Bài viết này chưa được hay lắm',
    		'Ý kiến của tôi khác so với bài này',
    		'Bài viết này được',
    		'Không thích bài viết này',
    		'Tôi chưa có ý kiến gì'
    	);

    	for($i=1;$i<=100;$i++)
    	{
	        DB::table('Comment')->insert(
	        	[
	        		'idUser' => rand(1,10),
	            	'idTinTuc' => rand(1,100),
	            	'NoiDung' => $NoiDung[rand(0,9)],
	            	'created_at' => new DateTime()
	        	]
	    	);
    	}
    }
}
