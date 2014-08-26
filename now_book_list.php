<html>
	<head>
   <link rel="stylesheet" href="assets/css/style.css">
	</head>
 <body><div class='portfolio-message mid_font'>

 <?php
 	$start_day = new DateTime('2014-08-03');
 	$today = new DateTime();
 	$interval = $today->diff($start_day)->format('%a');
 	$interval_to_first_sunday = floor($interval/14)*14;
 	$interval_to_last_saturday = $interval_to_first_sunday + 13;

 	$book_week_start_day = new DateTime('2014-08-03');
	$book_week_start_day->add(new DateInterval("P{$interval_to_first_sunday}D"));

 	$book_week_end_day = new DateTime('2014-08-03');
	$book_week_end_day->add(new DateInterval("P{$interval_to_last_saturday}D"));

  echo("■{$book_week_start_day->format('Y/m/d')} 〜 {$book_week_end_day->format('Y/m/d')} の本棚<br/>");

	$books = <<< BOOKS
<a href="http://miraitosho.hateblo.jp/entry/2014/07/03/104541" >【銀色の本１】BABYいびつ  - 山口 綾子</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/10/212352" >【銀色の本１】SONGS OF LIFE―Contemporary Remix“万葉集”</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/09/165441" >【銀色の本１】No Man's Land: The Photography of Lynne Cohen</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/07/09/172742" >【銀色の本１】大阪＋　森山大道</a><br/>
BOOKS;
	$books = str_replace(">【", "target='_blank'>【", $books);
  echo($books);

/* 
<a href="http://miraitosho.hateblo.jp/entry/2014/06/16/230529" >【水色の本３】ROADSIDE JAPAN 珍日本紀行</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/07/03/102637" >【水色の本３】ザ・フォール/落下の王国 </a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/07/03/095055" >【黒色の本５】Twilight: Photographs by Gregory Crewdson</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/29/190311" >【白色の本６】うたたね - 川内倫子</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/24/180303" >【白色の本６】鳥のない鳥篭―植松 大雄</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/23/072018" >【白色の本５】婦女界 大正１３年７月発刊</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/20/215848" >【白色の本５】バブルの肖像　都築響一</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/20/090328" >【白色の本５】九龍城砦　宮本 隆司</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/17/100131" >【白色の本５】F O R B I D E N　 S E N C E　J.マツオ</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/18/100629" >【ピンク色の本２】ケキャール社顛末記：逆柱 いみり</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/24/173804" >【水色の本２】ルネ・マグリット―1898-1967 (タッシェン・ビック・アート・シリーズ)</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/16/230028" >【水色の本２】きみが住む星</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/14/130605" >【水色の本２】新世紀エヴァンゲリオン劇場版―フィルムブック (まごころを、君に) </a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/14/130126" >【水色の本２】ザ・キムラカメラ</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/29/192726" >【黒色の本４】ヨウルのラップ - 成田舞</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/23/185711" >【黒色の本４】やなぎみわ―マイ・グランドマザーズ</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/171836" >【黒色の本４】亡骸劇場</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/15/205827" >【黒色の本４】野村佐紀子写真集 夜間飛行</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/13/104450" >【黒色の本３】路地―Wandering Back Alleys</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/15/134303" >【黒色の本３】内的な庭 有賀和郎画集 vol.1 ―根源性の癒しを求めて</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/165243" >【黒色の本３】スコープ少年の不思議な旅</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/222436" >【黒色の本３】Junk Sweets</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/17/084320" >【白色の本４】Art Photography Now</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/10/183709" >【白色の本４】チーズ・トースト・ボックス</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/15/212616" >【白色の本４】Living Together計画 - 手紙Ver</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/09/160126" >【白色の本４】雑誌「太陽」　特集：明治は遠く…</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/084944" >【黄色の本２】あなたならふつうの女のふつうの夜をふつうじゃなくしてくれますか</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/191707" >【黄色の本２】少女漫画雑誌マーガレット（昭和４６年３月２８日発行）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/09/153425" >【黄色の本２】イメクラ:Image Club </a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/180249" >【赤色の本３】偽景</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/05/175025" >【赤色の本３】Sixties Design </a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/03/182152" >【赤色の本３】危ない写真集246</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/04/191150" >【赤色の本３】万国博記念写真集　No3</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/14/103334" >【緑色の本１】THE BONE HOUSE</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/04/154802" >【緑色の本１】らくだこぶ書房21世紀古書目録</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/13/110100" >【緑色の本１】横尾忠則 森羅万象</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/10/214030" >【緑色の本１】よだかの星　：山猫や</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/09/083254" >【白色の本３】長谷川健郎写真集「奇妙な凪の日」</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/183540" >【白色の本３】リバーズ・エッジ</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/31/064623" >【白色の本３】ひまわり（アマチュア女性同人誌）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/03/071703" >【白色の本３】まんがキッチン</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/181808" >【水色の本１】高い塔の住人―工藤菊畝作品集</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/12/223625" >【水色の本１】ぼくんち (ビッグコミックス)</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/22/211000" >【水色の本１】The Fantastic Art of Jacek Yerka</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/31/075543" >【水色の本１】ファッション―18世紀から現代まで 京都服飾文化研究財団コレクション</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/131728" >【白色の本２】未来ちゃん</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/123823" >【白色の本２】もう、家に帰ろう</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/121026" >【白色の本２】金曜日の砂糖ちゃん</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/110708" >【白色の本２】女生徒（写真：佐内正史）</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/213350" >【赤色の本２】ブンカオトメ―乙女の辛口手帖</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/081653" >【赤色の本２】アサヒグラフ（1958年出版）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/31/101232" >【赤色の本２】Advanced Style--ニューヨークで見つけた上級者のおしゃれスナップ</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/121928" >【赤色の本２】結婚潮流（１９８５年）</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/07/03/111153" >【茶色の本２】美少女マガジンロリくらぶ 第32号（昭和64年1月発行）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/095440" >【茶色の本２】お気は確か? 〜恋する女への忠言</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/103329" >【黒色の本２】八本脚の蝶</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/210921" >【黒色の本２】M. C. Escher（エッシャー）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/203801" >【黒色の本２】Tadao Ando. Complete Works</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/29/094334" >【赤色の本１】空想の繪本（だまし絵）</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/25/094557" >【赤色の本１】ふたりはともだち</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/30/074533" >【赤色の本１】怪物図鑑2001</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/20/073604" >【赤色の本１】Satellite of LOVE―ラブホテル・消えゆく愛の空間学 </a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/22/220738" >【灰色の本１】ウエスト・ウイング</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/29/104551" >【灰色の本１】サム・ロイドの「考える」パズル</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/19/091556" >【灰色の本１】ホテルT’POINTパンフレット</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/19/084911" >【白色の本１】国立新美術館ガイドブック - アートのとびらNo1</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/16/093100" >【白色の本１】ネオテニー・ジャパン──高橋コレクション</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/14/091203" >【白色の本１】現代芸術場外乱闘</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/104552" >【白色の本１】ピュア・トランス</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/25/091223" >【黒色の本１】Mysteries of Harris Burdick - 文章のない絵本</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/16/075717" >【黒色の本１】Black Magic, White Noise</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/20/085442" >【黒色の本１】愛という廃墟</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/123646" >【黒色の本１】Gangs of Kabukicho（歌舞伎町）ー渡辺克巳</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/21/091341" >【茶色の本１】The Murals of John Pugh: Beyond Trompe L'Oeil</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/22/213113" >【茶色の本１】レメディオス・バロ展 - 図録</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/12/130903" >【茶色の本１】アイデア IDEA-Liquid〈vol-3〉</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/163352" >【茶色の本１】新宿 ― 森山大道</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/05/29/143953" >【黄色の本１】“逆理”の発想〈第3巻〉爆笑 珍道具の世界</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/25/093005" >【黄色の本１】アリスの不思議なお店</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/12/085108" >【黄色の本１】RUSH</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/27/102200" >【黄色の本１】TAMALA BOOKS―あたちむらむらなんでも来いなの</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/06/08/114139" >【ピンク色の本１】アート・ナウ―137人のアーティスト-新世紀の星-</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/02/190204" >【ピンク色の本１】漫画ブリッコ</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/09/172148" >【ピンク色の本１】グッドモーニング</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/29/150511" >【ピンク色の本１】レアモノ大図鑑</a><br/>

　
<a href="http://miraitosho.hateblo.jp/entry/2014/07/03/104541" >【銀色の本１】BABYいびつ  - 山口 綾子</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/06/10/212352" >【銀色の本１】SONGS OF LIFE―Contemporary Remix“万葉集”</a><br/>
<a href="http://miraitosho.hateblo.jp/entry/2014/05/09/165441" >【銀色の本１】No Man's Land: The Photography of Lynne Cohen</a><br/>

*/




?>
		</div>
  	<script src="assets/js/iframe_height.js"></script>
	</body>
</html>

