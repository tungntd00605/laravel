<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bakeries')->truncate();
        DB::table('bakeries')->insert([
            [
                'name' => 'VINHOMES',
                'address' => 'Hai Ba Trung',
                'price' => '50000',
                'description' => 'VINHOMES Nơi hạnh phúc ngập tràn',
                'detail' => 'Môi trường xanh sạch. Mỗi khu đô thị của Vinhomes đều được xây dựng trên nền tảng “Nơi cuộc sống hòa quyện cùng thiên nhiên” với khuôn viên cây xanh, công viên, quảng trường, mặt nước được thiết kế và bố trí tổng thể hài hòa... Các tiêu chí kiến trúc sinh thái, bảo vệ môi trường mà Vinhomes hướng tới đem lại lợi ích cho cuộc sống cộng đồng.',
                'image' => 'https://media.vinhomes.vn/storage/2_2.jpg'
            ],
            [
                'name' => 'ROYAL CITY',
                'address' => '72A Nguyễn Trãi – Thanh Xuân – Hà Nội',
                'price' => '70000',
                'description' => 'Royal City (Thành phố Hoàng gia) được mệnh danh là một “thành phố châu Âu thu nhỏ”',
                'detail' => 'Là nơi kết nối các đầu mối giao thông quan trọng, dễ dàng đi đến các địa điểm trọng yếu thông qua các tuyến đường huyết mạch của Thủ đô.',
                'image' => 'https://images.foody.vn/res/g10/97522/prof/s576x330/foody-mobile-ral1-jpg-177-635490469269443022.jpg'
            ],
            [
                'name' => 'Chung cư Iris Garden',
                'address' => '30 Trần Hữu Dực – K2, phường Cầu Diễn, quận Nam Từ Liêm, Hà Nội',
                'price' => '40000',
                'description' => ' Chung cư Iris Garden tọa lạc tại đường Trần Hữu Dực là chung cư cao cấp bậc nhất Hà Nội',
                'detail' => 'Được coi là dự án trọng điểm khu vực Mỹ Đình. Ứng dụng nhiều hệ thống tiện ích đồng bộ cùng công nghệ chăm sóc sức khỏe hàng đầu.  ',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/t%E1%BB%95ng%20quan%20d%E1%BB%B1%20%C3%A1n.jpg'
            ],
            [
                'name' => 'Chung cư An Bình City',
                'address' => 'Tọa tại TM1, TM2, CX1 của khu đô thị Thành phố Giao Lưu – 232 Phạm Văn Đông – Cổ Nhuế 1, Quận Nam Từ Liêm, thành phố Hà Nội.',
                'price' => '35000',
                'description' => 'Chung cư cầu giấy An Bình Cổ Nhuế nằm trong quần thể khu đô thị Thành Phố Giao Lưu, đường Phạm Văn Đồng',
                'detail' => 'Với Vị trí Chung cư An Bình City Cổ Nhuế này, mang đến cho khu chung cư môi trường sống tuyệt vời, với hệ thống cây xanh và hồ nước nhân tạo lớn từ công viên Hòa Bình, công viên có diện tích mặt nước nhân tạo lớn nhất Hà Nội. ',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-an-binh-city.jpg'
            ],
            [
                'name' => 'Vinhomes Green Bay',
                'address' => ' Số 7 Đại Lộ Thăng Long',
                'price' => '36000',
                'description' => 'Vinhomes Green Bay nằm tại vị trí Mễ Trì - Từ Liêm - Hà Nội. ',
                'detail' => 'Được đánh giá là mảnh đất “Vàng” tại phía Tây Thành phố bởi hệ thống giáo dục hàng đầu, và nhiều khu đô thị lớn nhất thủ đô',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/tien-ich-vinhomes-green-bay.jpg'
            ],
            [
                'name' => 'DCapitale Trần Duy Hưng',
                'address' => 'Trần Duy Hưng',
                'price' => '40000',
                'description' => 'Chung cư Trần Duy Hưng sẽ là điểm đến đáng mơ ước, nơi tận hưởng cuộc sống một cách hoàn hảo trọn vẹn.',
                'detail' => 'D.CapitaleTrần Duy Hưng với lợi thế sở hữu vị trí " Vàng " đắc địa cùng tiện ích đẳng cấp và thiết kế căn hộ khá linh hoạt giúp khách hàng có thể lựa chọn được căn hộ.',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/phoi-canh-vinhomes-tran-duy-hung-1.jpg'
            ],
            [
                'name' => 'Chung cư Vinhomes Sky Lake Phạm Hùng',
                'address' => 'Phạm Hùng',
                'price' => '55000',
                'description' => 'Dự án Vinhomes Sky Lake Phạm Hùng được chủ đầu tư Vingroup trang bị chuỗi tiện ích đồng bộ hoàn hảo. ',
                'detail' => 'Chung cư Vinhomes Sky Lake Phạm Hùng dự án tổ hợp căn hộ, văn phòng và trung tâm thương mại cao cấp được chủ đầu tư Vingroup tiến hành xây dựng.',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/anh-tong-quan.jpg'
            ],
            [
                'name' => 'Chung cư Housinco Grand Tower Nguyễn Xiển',
                'address' => 'Nguyễn Xiển - Thanh Trì',
                'price' => '45000',
                'description' => 'Housinco Grand Tower Nguyễn Xiển nằm trên trục đường số 1 với hơn 60m mặt tiền đường  Nguyễn Xiển',
                'detail' => 'Chung cư Housinco Grand Tower Nguyễn Xiển nằm trong quần thể khu đô thị mới Tây Nam Hà Nội được xây dựng đồng bộ, hiện đại . Khu vực dự án hứa hẹn sẽ là không gian sôi động, hiện đại, đẳng cấp trong tương lai tới',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-housinco-grand-tower-1.png'
            ],
            [
                'name' => 'Chung cư GoldSeason',
                'address' => '47 Nguyễn Tuân - Thanh Xuân',
                'price' => '44000',
                'description' => 'Nhanh tay đặt mua căn hộ để hưởng giá ưu đãi từ chủ đầu tư.',
                'detail' => 'Nổi bật là một dự án nhiều tiện ích nhất Hà Nội lên tới 99 tiện ích, điển hình như:

Công Viên Manhattan với thông điệp New Manhattan trong lòng Hà Nội, CÔNG VIÊN MANHATTAN  mô phỏng lại một công viên Central Park với đầy đủ các tiện ích và chức năng của một công viên nổi tiếng như khu chức năng dành cho người cao tuổi, khu vực lễ hội, khu vực dạo bộ, quảng trường lễ hội, thảm cỏ xanh...',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/phoi-canh-chung-cu-goldseason-1.jpg'
            ],
            [
                'name' => 'Chung cư Eco green City',
                'address' => 'Nguyễn Xiển - Thanh Xuân - Hà Nội',
                'price' => '52000',
                'description' => 'Dự án Chung cư eco green city nằm tại Nguyễn Xiển đang thu hút hàng nghìn khách nước ngoài',
                'detail' => 'Eco Green City sở hữu một vị trí vàng với phong thủy đắc địa cùng các tuyến đường giao thông thuận tiện. Tọa lạc ngay trên đường Nguyễn Xiển, tuyến đường huyết mạch cửa ngõ Tây Nam thủ đô Hà Nội, cư dân sinh sống ở đây dễ dàng di chuyển đến các khu vực trung tâm cũng như các vùng kinh tế trọng điểm tại các tỉnh phía Bắc như Hải Phòng, Quảng Ninh, Vĩnh Phúc, Thái Nguyên, …',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-eco-green-city-nguyen-xien-1.jpg'
            ],
            [
                'name' => 'Chung cư The Emerald Mỹ Đình',
                'address' => ' CT8 Mỹ Đinh - The Manor',
                'price' => '39000',
                'description' => 'The Emerald tọa lạc tại khu vực đang phát triển, CT8 Đình Thôn sở hữu vị trí thuận đã tạo lợi thế dự án The Emerald',
                'detail' => 'Chung cư The Emerald Mỹ Đình cũng được nhiều chuyên gia đánh giá cao với các tiện tiện ích khép kín và đạt tiêu chuẩn quốc tế dành riêng cho cư dân.Tất cả các căn hộ The Emerald Mỹ Đình được thiết kế hiện đại, khoa học tận dụng được tối đa các công năng sử dụng kết hợp với nhiều tiện ích vượt trội sẽ đem đến không gian thư giãn và đầy đủ tiện nghi cho cư dân nơi đây',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/Tong-the-the-emerald.jpg'
            ],
            [
                'name' => 'Chung cư FLC Green Home ',
                'address' => '18 Phạm Hùng',
                'price' => '53000',
                'description' => 'Dự án chung cư FLC Green Home được  tọa lạc tại vị trí hết sức đắc địa tại 18 Phạm Hùng, Nam Từ Liêm, Hà Nội',
                'detail' => 'Chung cư FLC Green Home tọa lạc tại một trong những vị trí đẹp nhất khu vực phía Tây Hà Nội. Nằm trên mặt đường của một trong những tuyến giao thông huyết mạch bậc nhất thủ đô, FLC hứa hẹn sẽ mang lại một khu chung cư cao cấp với chất lượng hoàn hảo, tiện nghi hiện đại cho quý khách hàng',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-flc-green-home-1.jpg'
            ],
            [
                'name' => 'Chung cư Mỹ Đình Pearl',
                'address' => '',
                'price' => '48000',
                'description' => 'Chung cư Mỹ Đình Pearl tọa lạc tại ngã ba đường Châu Văn Liêm và Đại Lộ Thăng Long cửa ngõ Phía Tây của Thủ Đô nơi tập trung các khu đô thị chung cư cao cấp như The Manor, Keangnam, Golden Palace, Scudito, Thăng Long Number one...',
                'detail' => 'Dự án chung cư Mỹ Đình Pearl còn mang đến cho cư dân tương lai hệ thống tiện ích, cảnh quan tinh tế cho một không gian sống lý tưởng, phù hợp với nhiều lứa tuổi',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-my-dinh-pearl-1.jpg'
            ],
            [
                'name' => 'Chung cư The Emerald Mỹ Đình',
                'address' => ' CT8 Mỹ Đinh - The Manor',
                'price' => '39000',
                'description' => 'The Emerald tọa lạc tại khu vực đang phát triển, CT8 Đình Thôn sở hữu vị trí thuận đã tạo lợi thế dự án The Emerald',
                'detail' => 'Chung cư The Emerald Mỹ Đình cũng được nhiều chuyên gia đánh giá cao với các tiện tiện ích khép kín và đạt tiêu chuẩn quốc tế dành riêng cho cư dân.Tất cả các căn hộ The Emerald Mỹ Đình được thiết kế hiện đại, khoa học tận dụng được tối đa các công năng sử dụng kết hợp với nhiều tiện ích vượt trội sẽ đem đến không gian thư giãn và đầy đủ tiện nghi cho cư dân nơi đây',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/Tong-the-the-emerald.jpg'
            ],
            [
                'name' => 'Chung cư FLC Green Home ',
                'address' => '18 Phạm Hùng',
                'price' => '53000',
                'description' => 'Dự án chung cư FLC Green Home được  tọa lạc tại vị trí hết sức đắc địa tại 18 Phạm Hùng, Nam Từ Liêm, Hà Nội',
                'detail' => 'Chung cư FLC Green Home tọa lạc tại một trong những vị trí đẹp nhất khu vực phía Tây Hà Nội. Nằm trên mặt đường của một trong những tuyến giao thông huyết mạch bậc nhất thủ đô, FLC hứa hẹn sẽ mang lại một khu chung cư cao cấp với chất lượng hoàn hảo, tiện nghi hiện đại cho quý khách hàng',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-flc-green-home-1.jpg'
            ],
            [
                'name' => 'Chung cư Mỹ Đình Pearl',
                'address' => '',
                'price' => '48000',
                'description' => 'Chung cư Mỹ Đình Pearl tọa lạc tại ngã ba đường Châu Văn Liêm và Đại Lộ Thăng Long cửa ngõ Phía Tây của Thủ Đô nơi tập trung các khu đô thị chung cư cao cấp như The Manor, Keangnam, Golden Palace, Scudito, Thăng Long Number one...',
                'detail' => 'Dự án chung cư Mỹ Đình Pearl còn mang đến cho cư dân tương lai hệ thống tiện ích, cảnh quan tinh tế cho một không gian sống lý tưởng, phù hợp với nhiều lứa tuổi',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-my-dinh-pearl-1.jpg'
            ],[
                'name' => 'Chung cư The Emerald Mỹ Đình',
                'address' => ' CT8 Mỹ Đinh - The Manor',
                'price' => '39000',
                'description' => 'The Emerald tọa lạc tại khu vực đang phát triển, CT8 Đình Thôn sở hữu vị trí thuận đã tạo lợi thế dự án The Emerald',
                'detail' => 'Chung cư The Emerald Mỹ Đình cũng được nhiều chuyên gia đánh giá cao với các tiện tiện ích khép kín và đạt tiêu chuẩn quốc tế dành riêng cho cư dân.Tất cả các căn hộ The Emerald Mỹ Đình được thiết kế hiện đại, khoa học tận dụng được tối đa các công năng sử dụng kết hợp với nhiều tiện ích vượt trội sẽ đem đến không gian thư giãn và đầy đủ tiện nghi cho cư dân nơi đây',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/Tong-the-the-emerald.jpg'
            ],
            [
                'name' => 'Chung cư FLC Green Home ',
                'address' => '18 Phạm Hùng',
                'price' => '53000',
                'description' => 'Dự án chung cư FLC Green Home được  tọa lạc tại vị trí hết sức đắc địa tại 18 Phạm Hùng, Nam Từ Liêm, Hà Nội',
                'detail' => 'Chung cư FLC Green Home tọa lạc tại một trong những vị trí đẹp nhất khu vực phía Tây Hà Nội. Nằm trên mặt đường của một trong những tuyến giao thông huyết mạch bậc nhất thủ đô, FLC hứa hẹn sẽ mang lại một khu chung cư cao cấp với chất lượng hoàn hảo, tiện nghi hiện đại cho quý khách hàng',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-flc-green-home-1.jpg'
            ],
            [
                'name' => 'Chung cư Mỹ Đình Pearl',
                'address' => '',
                'price' => '48000',
                'description' => 'Chung cư Mỹ Đình Pearl tọa lạc tại ngã ba đường Châu Văn Liêm và Đại Lộ Thăng Long cửa ngõ Phía Tây của Thủ Đô nơi tập trung các khu đô thị chung cư cao cấp như The Manor, Keangnam, Golden Palace, Scudito, Thăng Long Number one...',
                'detail' => 'Dự án chung cư Mỹ Đình Pearl còn mang đến cho cư dân tương lai hệ thống tiện ích, cảnh quan tinh tế cho một không gian sống lý tưởng, phù hợp với nhiều lứa tuổi',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-my-dinh-pearl-1.jpg'
            ],
            [
                'name' => 'Chung cư FLC Star Tower Quang Trung',
                'address' => ' 418 Quang Trung',
                'price' => '49000',
                'description' => 'Chung Cư FLC Star Tower tọa lạc tại vị trí đắc địa của quận Hà Đông, số 418 Quang Trung, Hà Đông, Hà Nội',
                'detail' => 'Chung cư FLC Star Tower là tổ hợp căn hộ cao cấp, tọa lạc tại vị trí số 418 Quang Trung, Hà Đông, Hà Nội, vị trí đắc địa của quận Hà Đông, FLC Star Tower hội tụ những yếu tố ưu việt không chỉ về vị trí mà còn về thiết kế căn hộ',
                'image' => 'http://chungcuvip.biz/chungcuvip/upload/images/chung-cu-flc-star-tower-quang-trung-1.jpg'
            ]
        ]);
    }
}
