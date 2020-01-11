drop database if exists storiesonline;
create database storiesonline;
use storiesonline;

drop table if exists account;
create table account(
id int auto_increment primary key,
username varchar(30),
pwd varchar(10),
positions varchar(10));

insert into account values
(null, "Loan", "1234", "Admin"),
(null, "Ngoc", "1234", "User");

drop table if exists products;
create table products(
id int auto_increment primary key,
proName varchar(30),
author varchar(50),
type varchar(30),
img varchar(100),
details text);

insert into products values
(null, "Thất tịch không mưa", "Lâu Vũ Tình", "Tiểu thuyết", "thattichkhongmua.jpg", "Mùng 7 tháng 7 âm lịch, chính là lễ Valentine của Trung Quốc.
(Nhân vật nữ chính Thẩm Thiên Tình sinh ngày Mùng 7 tháng 7.)
Từ nhỏ cô đã thầm yêu anh, như số kiếp không thể thay đổi
Tình  yêu trong sáng ấy, như lần đầu được nếm mùi vị của quả khế mới chín.
Sau đó cô và anh xa nhau, gặp lại đều cách nhau ba năm.
15 tuổi, anh lên phía bắc học, từ  đó mất liên lạc;
18 tuổi, cô nông nổi đi gặp anh, đổi lại là sự đau lòng;"),
(null, "Bên nhau trọn đời", "Cố Mạn", "Ngôn tình", "bennhautrondoi.jpg","Truyện Bên Nhau Trọn Đời là một trong những tiểu thuyết đầu tiên của tác giả Cố Mạn. Truyện tuy đã lâu nhưng vẫn để lại cho người đọc những ấn tượng riêng, đọc truyện ta sẽ không bị nhàm chán.
Truyện xoay quanh những vấn đề tình yêu, với lối viết truyện cuốn hút, hấp dẫn người đọc nên truyện dễ dàng đi vào lòng người.
Để tưởng nhớ một thời đam mê thể loại ngôn tình, và cũng là tác phẩm đầu tiên làm tôi đam mê thể loại ngôn tình."),
(null, "Archimedes thân yêu", "Cửu Nguyệt Hi", "Trinh thám", "archimedes-than-yeu.jpg", "Owen giải thích: Marie là cô giúp việc người Singapore, Isaac là con vẹt, Albert là con cá nhiệt đới.
Chân Ái với vẻ không tin nổi, Anh lại đặt tên cho thú cưng bằng tên của Einstein và Isaac Newton sao?
Mặc dù tôi đánh giá cao việc cô đã nhận ra nguồn gốc tên của các cô nàng nhưng tôi không thích thái độ của cô với chúng. Ngôn Tố kiêu căng hất mặt, giọng đầy bất mãn. Albert là con cá nhiệt đới rất có trí tuệ, còn Isaac thuộc được ba định luật Newton bằng tiếng Anh, khẩu âm quận Devon nước Anh. Còn nữa, nó rất thích ăn táo.
Chân Ái gật đầu: Anh chọn Marie làm nữ giúp việc không phải vì tên cô ấy giống với Marie Curie chứ?
Ngôn Tố nheo mắt nhìn cô một lúc, mím môi: Cô thông minh hơn tôi tưởng. OK, cô có thể tá túc ở nhà"),
(null, "Ngủ cùng sói", "Diệp Lạc Vô Tâm","Ngôn tình", "ngu-cung-soi.jpg","Để trả thù cho đại ca, Hàn Trạc Thần đã giết cả nhà của tên lái xe, cũng chính là kẻ phản bội, nhưng lại tha chết cho đứa con gái mới 7 tuổi của hắn.Hai năm sau, Hàn Trạc Thần đến viện phúc lợi và nhận nuôi hai đứa con, nhưng chỉ giữ lại đứa con gái và dặt tên là Hàn Thiên Vu.
Hàn Thiên Vu đã sưởi ấm trái tim băng giá ấy bằng tình cảm gia đình mà trước kia, hắn chưa bao giờ cảm nhận được một cách trọn vẹn. Một bên tình một bên thù liệu bên nào sẽ lấn áp hơn đây?"),
(null, "Đông Cung", "Phỉ Ngã Tư Tồn", "Ngược", "dong-cung.jpg", "Có con chồn bước lang thang,
Ở trên đập đá đắp ngang sông Kỳ.
Lòng em luống những sầu bi.
Nỗi chàng quần thiếu ai thì may cho ?"),
(null, "Nếu ốc senn có tình yêu", "Đinh Mặc", "Ngôn tình", "neu-oc-sen-co-tinh-yeu.jpg", "Trong  tình yêu thường có hai dạng: yêu bằng lý trí và yêu bằng con tim. Đối với những ai yêu bằng lý trí, một khi tình yêu vượt qua sự tỉnh táo, thì đó là một tình yêu đáng để đắm chìm. ");


drop table if exists content;
create table content(
id int auto_increment primary key,
noStory int,
content text,
idStory int,
FOREIGN KEY (idStory) REFERENCES products(id)
);

insert into content values
(null, 1, "<p>Tình yêu giống như lần đầu được nếm thử quả khế mới chín,Trong quả khế chát xanh xanh nụ cười ngốc nghếch, ngọt ngào của anh, tình đầu thơ ngây, trong sáng của em lặng lẽ nảy mầm.</p>
	<p>Tôi tên là Thẩm Thiên Tình.</p>
<p>Nếu nói đến cuộc đời tôi, chỉ e khó lòng kể hết trong một chốc một lát, sợ mọi người đọc sẽ thấy nặng đầu buồn ngủ, vậy nên tôi sẽ chỉ chọn vài trọng điểm để nói.</p>
<p>Cái gọi là “cuộc đời tôi” thật ra cũng chẳng dài, tính đến nay mới có mười bốn năm, ba trăm hai mươi bảy ngày, tám giờ, năm giây mà thôi.</p>
<p>Đầu tiên, cũng giống như tất cả mọi người, tôi có cha mẹ rất hiền từ, lại có một người anh vô cùng đẹp trai, ưu tú, khiến các nữ sinh nhìn thấy đều không kìm được mà hét lên ngưỡng mộ.</p>
<p>Về phần tôi, từ nhỏ đến lớn, nhận xét của các giáo viên nhìn chung đều quanh đi quẩn lại những từ như: cá tính, bốc đồng, bướng bỉnh, khó bảo, thích quản chuyện người khác, vân vân và vân vân… Giáo viên nào tốt một chút sẽ nói tôi hoạt bát, hướng ngoại, giữa đường gặp chuyện bất bình chẳng tha.</p>
<p>Nhưng thế thì có gì khác chứ? Chẳng qua chỉ đổi cách nói cho dễ nghe hơn thôi, vẫn khiến tôi bị tổn thương.</p>
<p>Cái gì? Bạn không tin ư?! Để tôi giải thích cho mà nghe nhé!</p>
<p>Hoạt bát, hướng ngoại: nghĩa là tôi rất nghịch, nghịch vô cùng, nghịch đến mức bị phạt đánh.</p>
<p>Giữa đường gặp chuyện bất bình chẳng tha: nói cách khác, chính là gây chuyện thị phi, nghịch ngợm, phá phách.</p>
<p>Tôi hận nhất là năm lớp năm, cô giáo chủ nhiệm còn ghi trong sổ liên lạc của tôi là: ngu muội dốt nát, thiếu tôn trọng bậc bề trên, hung hăng càn quấy, không biết hối cải, mong phụ huynh quản lý nghiêm ngặt hơn, tránh gây hại cho nếp sống đẹp của xã hội.</p>
<p>Vậy là cô ấy đã trang trọng biến tôi thành con quỷ phá hoại thế giới, làm băng hoại nếp sống xã hội, sự khởi sắc hay tụt dốc của nền kinh tế cũng liên quan đến tôi, hơn nữa, ngay cả việc Khổng Minh tiên sinh xuất sư vị tiệp thân tiên tử , sự thành bại, thịnh suy của Trung Quốc trong năm nghìn năm qua cũng đều là lỗi của tôi, chỉ thiếu nước bắt tôi mổ bụng tự sát để tạ tội với thế giới.</p>
<p>Tôi chẳng qua chỉ đặt biệt danh Diệt Tuyệt sư thái sau lưng cô giáo quá lứa lỡ thì đó, ngoài ra còn cá cược với bạn bè trong lớp về màu sắc nội y của cô, mọi người thử nói xem, như thế có được coi là phạm tội chết ngàn lần không?</p>
<p>Mẹ phạt tôi quỳ cũng chẳng sao muốn tôi ngày mai xin lỗi Diệt Tuyệt… à, cô giáo Ngô thì tôi cũng đồng ý; viết bản kiểm điểm bày tỏ sự ăn năn, hối hận lại càng là chuyện nhỏ, đảm bảo sẽ rất chân thành và đặc sắc gần bằng Thư ly biệt vợ nhưng… điều tôi không thể chấp nhận nhất là mẹ lại không cho phép tôi ăn tối, đã thế còn cố ý nấu món thịt kho tàu  mà tôi thích nhất nữa chứ!</p>
<p>Đây đúng là hình phạt vô nhân đạo nhất trên đời này!</p>
<p>Có điều, vẫn còn may, anh trai luôn bảo vệ tôi bất cứ lúc nào.</p>
<p>Hồi nhỏ, nhiều lần bị phạt, tôi thường hờn tủi hỏi mẹ: Mẹ ơi, con không phải do mẹ sinh ra đúng không?</p>
<p>Đúng rồi đấy! Con được móc lên từ cống rãnh hôi thối.Thật quá đáng! Sao mẹ trả lời dứt khoát như vậy? Lại còn làm vẻ mặt Cả đời con, lúc này là thông minh nhất đấy! nữa chứ.</p>
<p>Trái ngược với tôi, anh trai là người tài đức vẹn toàn, rất đáng ngưỡng mộ. Mà quả thật tôi cũng sùng bái anh vô cùng.</p>
<p>Khi ấy, điều kiện kinh tế nhà tôi không tốt lắm, gia đình làm nghề nông, cha mẹ hằng ngày đầu tắt mặt tối, không thể chăm sóc tôi chu đáo, tôi chẳng khác nào do một tay anh trai nuôi lớn. Đối với tôi, anh trai không chỉ là anh trai mà còn là người hiểu tôi nhất trên thế gian này. Không giống những người khác luôn phê phán, chỉ trích tôi, anh đối xử với tôi hoàn toàn khác, bao dung mọi hành vi của tôi. Mỗi lần tôi gây chuyện, giữa vô vàn cặp mắt chau lại nhìn tôi, luôn có một khuôn mặt mỉm cười, ánh mắt tràn đầy sự bao dung, thấu hiểu, âm thầm ủng hộ tôi.</p>
<p>Ngay từ khi còn rất bé, tôi đã biết anh trai là người vô cùng quan trọng với tôi. Anh vừa là thần hộ mệnh vừa là nơi tránh nạn của tôi, mỗi lần xảy ra chuyện gì, người đầu tiên chạy đến bên tôi bao giờ cũng là anh; mỗi khi gây họa, tôi cũng tìm đến anh trước nhất. Từ rất lâu rồi, tôi đã nhận thức được rằng mình có thể mất đi tất cả nhưng không thể không có anh trai.</p>
<p>Có lần, cực kỳ buồn chán vì không có việc gì làm, tôi ngồi xổm một bên xem đám bạn hàng xóm chơi trò “cô dâu, chú rể”, sau khi về nhà thì luôn miệng kêu gào đòi được gả cho anh trai. Trong những năm tháng trẻ thơ vô tri, hồ đồ đó, tôi cũng không hiểu từ gả có nghĩa là gì, nhưng Đại Mao – anh bạn hàng xóm hơn tôi hai tuổi đã nói với tôi mội cách rất người lớn rằng, gả có nghĩa là sống bên người mình thích nhất, mãi mãi không lìa xa.</p>
<p>Người mà mình thích nhất? Đó chẳng phải là anh trai ư?</p>
<p>Cho nên tôi mới hỏi anh trai có muốn được gả cho tôi không.</p>
<p>Anh trai nói không được.</p>
<p>“Tại sao?”</p>
<p>“Bởi vì anh là con trai, không thể “gả” cho em được.”</p>
<p>“Vậy, gả em cho anh là được chứ gì.”</p>
<p>“Vẫn không được.”</p>
<p>“Tại sao?” Lần đầu tiên tôi cảm thấy anh trai thật lắm chuyện, bèn ra sức trừng mắt với anh.</p>
<p>Anh khẽ cười, xoa xoa đầu tôi: “Bởi vì chúng ta là anh em.”</p>
<p>Anh em? Tôi nghiêng đầu suy nghĩ, bởi vì là anh em nên tôi không thể được gả cho người anh trai mà mình thích nhất sao?</p>
<p>Năm đó, tôi ba tuổi rưỡi, lần đầu tiên ghét hai chữ “Anh em”.</p>
<p>Một hôm, nửa đêm tỉnh giấc, không thấy anh trai đâu, tôi hốt hoảng xuống giường đi tìm. Lần theo ánh đèn yếu ớt, tôi nhìn thấy anh đang đứng trước cửa phòng cha mẹ, vẻ mặt đờ đẫn, sững sờ.</p>
<p>“Anh…”</p>
<p>“Suỵt!” Anh trai đưa ngón tay lên môi, ra hiệu cho tôi yên lặng.</p>
<p>Tôi gật đầu nghe lời, đi về phía anh, không gây ra một tiếng động nào, loáng thoáng nghe thấy tiếng cha mẹ nói chuyện trong phòng.</p>
<p>Mùa đông năm đó rất lạnh, anh trai thấy tôi không đi giày liền bế tôi lên, đưa về phòng.</p>
<p>Tôi rất tò mò, hỏi anh: “Anh nghe trộm…”</p>
<p>“Anh không nghe trộm. Anh dậy uống trà, vô tình nghe được thôi.” Anh đặt tôi lên giường, quỳ xuống phủi bụi bẩn trên chân tôi. Đôi chân bé nhỏ của tôi không an phận, cứ đung đưa, đung đưa.</p>
<p>“Tình, đừng động đậy!” Anh lật chăn lên, túm lấy chiếc tất mà tôi đã đá ra, đi vào chân cho tôi.</p>
<p>“Hì hì… Anh trai, anh trai…” Tôi nũng nịu nhào tới ôm cổ, hôn lên mặt anh, để lại một vệt nước bọt dinh dính.</p>
<p>Từ trước đến nay anh không bao giờ chê bẩn, chỉ cười cười ấn tôi vào trong chăn rồi nằm xuống bên cạnh.</p>
<p>“Tình, việc tối nay không được nói cho ai biết nhé!”</p>
<p>“Chuyện anh nghe trộm á?”</p>
<p>“Anh không nghe trộm, mà là vô tình nghe được.”</p>
<p>“Không nghe trộm… mà là vô tình?”</p>
<p>“Đúng, cho nên Tình đừng nói.”</p>
<p>Tôi nhoẻn miệng cười, ra chiều đã hiểu, gật đầu lia lịa.</p>
<p>“Không được nói anh nghe trộm… Anh không nghe trộm!”</p>
<p>“Vô tình?”</p>
<p>“Đúng, vô tình.”</p>
<p>“Vô tình nghe trộm.”</p>
<p>“…” Anh thở dài. “Tiểu Tiểu Tình à, em nhất định đến chết cũng phải giữ chữ “nghe trộm” sao?”</p>
<p>Tôi không nói với anh, thật ra tôi cũng nghe thấy rồi.</p>
<p>Giống như anh trai – vô tình nghe trộm.</p>
<p>Không biết vì sao tôi lại ghi nhớ mấy từ quan trọng đó, mà tôi thậm chí còn chẳng biết cái từ quan trọng đó có ý nghĩa gì nữa.
<p>Nó cứ lởn vởn trong đầu, ngày ngày quấy rầy tôi.</p>
<p>Thế là tôi liền hỏi anh trai: “Cô nhi là gì hả anh?”.</p>
<p>Anh đang tắm cho tôi liền dừng lại, lạ lùng hỏi: “Em nghe được từ đâu vậy?”</p>
<p>“Tối hôm đó. anh nghe trộm…”</p>
<p>“Chẳng phải anh đã bảo em không được nhắc đến chuyện đấy nữa rồi cơ mà?”</p>
<p>“Vậy cô nhi là gì?”</p>
<p>“Cô nhi là…” Anh dừng lại một lúc, giúp tôi mặc quần áo, cân nhắc lựa chọn từ ngữ. “Những đứa trẻ không có cha, không có mẹ, cũng không có người thân…”
<p>“Mẹ nói em là cô nhi, em không có người thân ư?”</p>
<p>Cho nên cha không phải của tôi, mẹ cũng không phải của tôi, đến anh trai cũng không phải của tôi, tôi… là cô nhi?!
<p>Anh đột nhiên không nói gì, ôm chặt tôi vào lòng.</p>
<p>Rất lâu, rất lâu sau đó, tôi mới hiểu được cái ôm đó chính là sự đau lòng.</p>
<p>Dần dần hiểu chuyện, rốt cuộc tôi đã biết cô nhi thực chất là thế nào, cũng hiểu được sự thương xót trong cái ôm đó, song tôi cũng chẳng có cảm giác gì nhiều, vì chưa kịp buồn phiền thì đã có quá nhiều cảm giác len lỏi trong trái tim rồi, đầy đến nỗi không còn chỗ để chứa cái khác.</p>
<p>Rốt cuộc có đúng là được móc lên từ cống rãnh hôi thối hay không, tôi chẳng muốn chứng minh, bởi vì cho dù không có thứ gì, tôi vẫn có một người thực sự yêu thương tôi hết mực, không bao giờ cô đơn.</p>
<p>Anh trai, thật sự không chỉ là anh trai.</p>
<p>Vậy thì là cái gì? Tôi vẫn chưa có đáp án, nhưng trước ngày hôm đó, tôi đã vô thức giấu hết số thư tình mà những người ngưỡng mộ nhờ tôi gửi cho anh trai.</p>
<p>Năm lớp bốn, cô bạn thân nhất của tôi khen anh đẹp trai, toàn mượn cớ đến nhà tôi chơi, thế là trước khi kết thúc học kỳ đó, tôi đã cắt đứt quan hệ với nó, chính thức tuyệt giao, đồng thời hiểu ra một đạo lý ngàn năm không đổi, đó là: tình bạn giữa nữ giới tương đối mong manh.</p>
<p>Năm lớp bảy, hoa khôi lớp tôi theo đuổi anh trai, tôi yêu cầu anh không được đến trường đón tôi nữa, tôi sẽ tự về nhà. Anh cử tưởng tôi không thích dựa dẫm vào anh vì muốn làm ra vẻ “người nhớn”.</p>
<p>Đùa chứ! Sao tôi có thể để anh trai khôi ngô, tuấn tú của mình hằng ngày bị một bầy con gái si tình dùng ánh mắt cưỡng bức được?</p>
<p>Anh trai là của tôi, của riêng mình tôi thôi!</p>
<p>Ham muốn chiếm hữu anh trai của tôi khá cao, điều này tôi chưa từng phủ nhận.</p>
<p>Dần dần tôi bắt đầu hiểu ra, đằng sau ham muốn chiếm hữu mãnh liệt này là gì. Đó chính là tình cảm của một thiếu nữ mười bốn tuổi…</p>
" ,1),
(null, 1, "<p>Triệu Mặc Sênh lặng người nhìn cặp trai gái đứng trước quầy bán rau, một lần nữa chị cảm nhận sự lạ lùng của số phận. Bảy năm trước, chính họ khiến chị quyết định ra đi. Bây giờ họ lại cùng nhau đi mua sắm, vậy là cuối cùng họ vẫn cùng nhau! May mà hồi ấy chị bỏ ra đi, nếu không…Mặc Sênh không dám nghĩ thêm…</p>
	<p>Hà Dĩ Thâm, Hà Dĩ Văn, sao mình ngốc thế, tại sao cứ một mực cho rằng hai người ấy tên giống nhau thì nhất định là anh em?</p>
<p>“Chúng tôi không phải là anh em, trước đây hai gia đình chúng tôi là hàng xóm của nhau, đều họ Hà cho nên cũng đặt tên cho các con giống nhau. Về sau, cha mẹ Dĩ Thâm đột ngột qua đời, cha mẹ tôi nhận nuôi Dĩ Thâm.”</p>
<p>“Chị tưởng, chị mạnh hơn tình cảm hai mươi năm giữa tôi và Dĩ Thâm sao?”</p>
<p>“Hôm nay tôi chính thức cho chị biết, tôi yêu Dĩ Thâm, nhưng tôi không muốn yêu thầm yêu vụng. Tôi và chị sẽ cạnh tranh công khai.”</p>
<p>Năm19 tuổi, một ngày trước sinh nhật Mặc Sênh, cô bạn gái Hà Dĩ Văn vốn điềm đạm, bỗng nhiên thẳng thắn tuyên bố với chị. Một người dịu dàng, không bao giờ tranh giành với ai như Dĩ Văn mà quả quyết như vậy, chắc hẳn cô ấy phải yêu Dĩ Thâm nhiều lắm.</p>
<p>Còn chị? Chị có gì để cạnh tranh với Dĩ Văn? Chính vào ngày Dĩ Văn tuyên chiến, chị đã thua, sau đó chị đã chạy trốn sang Mỹ suốt bảy năm trời.</p>
<p>Ôi, Hà Dĩ Thâm” – Nghĩ đến ánh mắt lạnh lùng, những lời nói tuyệt tình của anh ta, Mặc Sênh thấy nhoi nhói trong lòng. Tuy cảm giác rất mơ hồ, khó nhận ra, nhưng chắc chắn là có thật.</p>
<p>Anh đi về phía chị, bàn tay Mặc Sênh nắm chặt tay đẩy xe hàng đến mức các đầu khớp ngón tay trắng bệch, như sắp long ra. Nhưng siêu thị lúc đó quá đông, chị lại đang đẩy cái xe chứa hàng nên hoàn toàn không thể dễ dàng quay người bỏ chạy. Tuy nhiên ngay lập tức chị nghĩ, vì sao mình phải lẩn tránh? Mình nên bình thản nói với họ một câu đại loại: “Ồ, đã lâu không gặp.”</p>
<p>Rồi kiêu hãnh quay đi, để lại cho họ một hình ảnh đẹp về mình mới phải.</p>
<p>Nhưng, có thể họ không nhận ra mình. Có thể lắm chứ, mình đã thay đổi nhiều, mái tóc dài buông xõa năm xưa giờ biến thành mái tóc ngắn chấm tai, làn da trắng nõn ngày nào giờ đã sạm đi nhiều bởi cái nắng bang California, lại còn quần bò, áo phông rộng thùng thình, giày thể thao, khác xưa nhiều quá!</p>
<p>Họ bước từng bước, chầm chậm tiến lại gần nhau, rồi… lướt qua nhau.</p>
<p>Đau đớn quá!</p>
<p>Hình như có tiếng nói vẳng lại.</p>
<p>“Có cần mua thêm sữa không?” – Đúng là tiếng Dĩ Văn rồi, vẫn nhỏ nhẹ như xưa.</p>
<p>Chị không nghe rõ câu trả lời. Nhớ quá, giọng nói trầm ấm như tiếng vĩ cầm của Dĩ Thâm luôn vẳng bên tai Mặc Sênh trong suốt bảy năm chị lưu lạc xứ người.</p>
<p>Hẫng hụt, nhưng đồng thời cũng thấy nhẹ nhõm. Mặc Sênh ngẩng đầu nãy giờ vẫn cúi, quả quyết bước đi.</p>", 2),
(null, 2, "<p>Tôi tên là Thẩm Hàn Vũ.</p>
	<p>Cuộc đời tôi thực ra cũng chẳng có gì cao trào, kịch tính, tất cả đều xoay quanh một trọng tâm duy nhất là cô gái có tên Thẩm Thiên Tình.</p>
	<p>Cái gọi là “cuộc đời tôi” thật ra cũng chẳng dài, tính tới bây giờ mới được mười bảy năm, hai trăm bốn mươi ngày, chín giờ, ba mươi lăm phút, chín giây mà thôi.</p>
	<p>Từ nhỏ tới lớn, nhận xét của giáo viên về tôi nói chung đều quanh đi quẩn lại mấy từ như: phẩm hạnh tốt, biểu hiện xuất sắc, ham học, có chí tiến thủ. Kỳ thực, đó cũng chỉ là vì hoàn cảnh gia đình, muốn lĩnh học bổng ấy mà.</p>
	<p>Giống như tất cả mọi người, tôi có một người cha và một người mẹ luôn tôn trọng lẫn nhau, còn có một cô em gái vô cùng đáng yêu, hoạt bát nhưng lại không thích được khen là đáng yêu, vì đó là biểu hiện của sự non nớt, chưa trưởng thành, cũng không thích được khen là hoạt bát vì bệnh nghi ngờ của nó rất nặng, cho rằng như thế là có ý mắng nó nghịch ngợm.</p>
	<p>Cậu con trai đầu tiên thổ lộ tình cảm với nó đã hy sinh oanh liệt.</p>
	<p>Tình hỏi cậu ta thích con bé ở điểm gì?</p>
	<p>Ai dè cậu ta trả lời: “Vì cậu rất đáng yêu, hoạt bát.”</p>
	<p>Không khó để tưởng tượng anh chàng này sẽ chết thảm thế nào, nhỉ?</p>
	<p>Tình thấy cậu con trai đó thật đáng ghét, dám dùng cách này để chế giễu nó.</p>
	<p>Còn tôi lại cảm thấy con bé bị mắc chứng sợ mơ mộng hão huyền.</p>
	<p>Lần đầu tiên cô em gái được tỏ tình, kết quả là đối phương bị đánh bẹp đầu, xin hỏi tôi nên có phản ứng gì?</p>
	<p>Rất xin lỗi, tối hôm đó tôi cười đến sái quai hàm, không rảnh để phát biểu cảm tưởng.!</p>
	<p>Tình nhà chúng tôi không giống những đứa trẻ khác, nó là một loài hoa lạ, từ nhỏ đã sôi… sôi nổi! (Từ này không phạm vào điều cấm kỵ của nó nhỉ?) Một đứa trẻ khỏe khoắn, hiếu động, chẳng có lấy một khắc ngồi yên, vừa biết bò đã chui khắp phòng, sau khi biết đi, đừng hòng con bé ngồi một chỗ, loáng một cái lại phải đi tìm nó khắp nơi.</p>
	<p>Con bé rất thích chơi trò trốn tìm, chui bên đông, trốn bên tây; bắt người khác đi kiếm, nhưng rất lạ, cho dù nó trốn ở đâu tôi vẫn mò ra được, người đầu tiên tìm thấy nó luôn là tôi.</p>
	<p>Điều khác thường nhất là, có một năm thu hoạch ruộng, cha mẹ không yên tâm để hai đứa trẻ ở nhà, liền đem chúng tôi theo, lúc đó Tình đã biết bò, đang học đi, cà ngày bò đi bò lại, hãnh diện thể hiện thành quả, không biết loay hoay thế nào lại bò lên đống rạ đầy, cuối cùng không xuống được. Chẳng ai biết rốt cuộc làm thế nào mà con bé bò lên được trên đó, người lớn cũng không biết phải cứu kiểu gì. Nghe nói, nếu mà ngã từ độ cao đó xuống thì đủ khiến đứa trẻ chưa đầy một tuổi không biết trời cao đất dày ấy phải bỏ mạng.</p>
	<p>Tuổi thơ của con bé chỉ toàn là mạo hiểm và kích động.</p>
	<p>Thiên Tình là do một tay tôi chăm bẵm, có thể nói, tôi là người thân thiết nhất của nó, không ai có thể hiểu con bé hơn tôi, khi nó bi bô tập nói, từ đầu tiên biết gọi không phải cha, cũng không phải mẹ, mà là anh.</p>", 1),
(null, 1, "Chưa có truyện", 4),
(null, 1, "Chưa có truyện", 5),
(null, 1, "Chưa có truyện", 6);

drop table if exists cart;
create table cart(
idCart int auto_increment primary key,
idUser int,
FOREIGN KEY (idUser) REFERENCES account(id),
idStory int,
FOREIGN KEY (idStory) REFERENCES products(id));
