<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<?php
			
			
			ini_set('display_errors',1);
			error_reporting(E_ALL);
			set_time_limit(0);
			// загрузить через composer codepockr/phpQyery
			require '/vendor/autoload.php';
			$stop_file = isset($_POST['region'])? __DIR__ . '/stop.data' . $_POST['region'] : null;
			
			if(isset($_POST['stop']) && isset($_POST['region'])){
				file_exists($stop_file) && unlink($stop_file);
			}
			
			$title = isset($_POST['region']) ? $_POST['region'] : 'Выбор региона';
			?>
		</head>
		<body>
			<title><?=$title?></title>
			
			<form method=post >
				<select name="region" id="region">
					<option value="" selected="">Выберите регион</option>
					<option value="10001">01 - Республика Адыгея</option>
					<option value="10002">02 - Республика Башкортостан</option>
					<option value="10003">03 - Республика Бурятия</option>
					<option value="10004">04 - Республика Алтай</option>
					<option value="10005">05 - Республика Дагестан</option>
					<option value="10006">06 - Республика Ингушетия</option>
					<option value="10007">07 - Кабардино-Балкарская Республика</option>
					<option value="10008">08 - Республика Калмыкия</option>
					<option value="10009">09 - Карачаево-Черкесская Республика</option>
					<option value="10010">10 - Республика Карелия</option>
					<option value="10011">11 - Республика Коми</option>
					<option value="10012">12 - Республика Марий Эл</option>
					<option value="10013">13 - Республика Мордовия</option>
					<option value="10014">14 - Республика Саха (Якутия)</option>
					<option value="10015">15 - Республика Северная Осетия-Алания</option>
					<option value="10016">16 - Республика Татарстан</option>
					<option value="10017">17 - Республика Тыва</option>
					<option value="10018">18 - Удмуртская Республика</option>
					<option value="10019">19 - Республика Хакасия</option>
					<option value="10020">20 - Чеченская республика</option>
					<option value="10021">21 - Чувашская Республика</option>
					<option value="10022">22 - Алтайский край</option>
					<option value="10023">23 - Краснодарский край</option>
					<option value="10024">24 - Красноярский край</option>
					<option value="10025">25 - Приморский край</option>
					<option value="10026">26 - Ставропольский край</option>
					<option value="10027">27 - Хабаровский край</option>
					<option value="10028">28 - Амурская область</option>
					<option value="10029">29 - Архангельская область</option>
					<option value="10030">30 - Астраханская область</option>
					<option value="10031">31 - Белгородская область</option>
					<option value="10032">32 - Брянская область</option>
					<option value="10033">33 - Владимирская область</option>
					<option value="10034">34 - Волгоградская область</option>
					<option value="10035">35 - Вологодская область</option>
					<option value="10036">36 - Воронежская область</option>
					<option value="10037">37 - Ивановская область</option>
					<option value="10038">38 - Иркутская область</option>
					<option value="10039">39 - Калининградская область</option>
					<option value="10040">40 - Калужская область</option>
					<option value="10041">41 - Камчатский край</option>
					<option value="10042">42 - Кемеровская область</option>
					<option value="10043">43 - Кировская область</option>
					<option value="10044">44 - Костромская область</option>
					<option value="10045">45 - Курганская область</option>
					<option value="10046">46 - Курская область</option>
					<option value="10047">47 - Ленинградская область</option>
					<option value="10048">48 - Липецкая область</option>
					<option value="10049">49 - Магаданская область</option>
					<option value="10050">50 - Московская область</option>
					<option value="10051">51 - Мурманская область</option>
					<option value="10052">52 - Нижегородская область</option>
					<option value="10053">53 - Новгородская область</option>
					<option value="10054">54 - Новосибирская область</option>
					<option value="10055">55 - Омская область</option>
					<option value="10056">56 - Оренбургская область</option>
					<option value="10057">57 - Орловская область</option>
					<option value="10058">58 - Пензенская область</option>
					<option value="10059">59 - Пермский край</option>
					<option value="10060">60 - Псковская область</option>
					<option value="10061">61 - Ростовская область</option>
					<option value="10062">62 - Рязанская область</option>
					<option value="10063">63 - Самарская область</option>
					<option value="10064">64 - Саратовская область</option>
					<option value="10065">65 - Сахалинская область</option>
					<option value="10066">66 - Свердловская область</option>
					<option value="10067">67 - Смоленская область</option>
					<option value="10068">68 - Тамбовская область</option>
					<option value="10069">69 - Тверская область</option>
					<option value="10070">70 - Томская область</option>
					<option value="10071">71 - Тульская область</option>
					<option value="10072">72 - Тюменская область</option>
					<option value="10073">73 - Ульяновская область</option>
					<option value="10074">74 - Челябинская область</option>
					<option value="10075">75 - Забайкальский край</option>
					<option value="10076">76 - Ярославская область</option>
					<option value="10077">77 - г. Москва</option>
					<option value="10078">78 - г. Санкт-Петербург</option>
					<option value="10079">79 - Еврейская автономная область</option>
					<option value="10080">80 - Бывший Агинский Бурятский автономный округ</option>
					<option value="10081">81 - Бывший Коми-Пермяцкий автономный округ</option>
					<option value="10082">82 - Республика Крым</option>
					<option value="10083">83 - Ненецкий автономный округ</option>
					<option value="10084">84 - Бывший Таймырский (Долгано-Ненецкий) автономный округ</option>
					<option value="10085">85 - Бывший Усть-Ордынский Бурятский автономный округ</option>
					<option value="10086">86 - Ханты-Мансийский автономный округ - Югра</option>
					<option value="10087">87 - Чукотский автономный округ</option>
					<option value="10088">88 - Бывший Эвенкийский автономный округ</option>
					<option value="10089">89 - Ямало-Ненецкий автономный округ</option>
					<option value="10090">90 - Московская область</option>
					<option value="10091">91 - Калининградская область</option>
					<option value="10092">92 - г. Севастополь</option>
					<option value="10093">93 - Краснодарский край</option>
					<option value="10094">94 - Территории, находящиеся за пределами РФ</option>
					<option value="10095">95 - Чеченская республика</option>
					<option value="10096">96 - Свердловская область</option>
					<option value="10097">97 - г. Москва</option>
					<option value="10098">98 - г. Санкт-Петербург</option>
					<option value="10099">99 - г. Москва</option>
					<option value="10102">102 - Республика Башкортостан</option>
					<option value="10113">113 - Республика Мордовия</option>
					<option value="10116">116 - Республика Татарстан</option>
					<option value="10121">121 - Чувашская Республика</option>
					<option value="10123">123 - Краснодарский край</option>
					<option value="10124">124 - Красноярский край</option>
					<option value="10125">125 - Приморский край</option>
					<option value="10126">126 - Ставропольский край</option>
					<option value="10134">134 - Волгоградская область</option>
					<option value="10136">136 - Воронежская область</option>
					<option value="10138">138 - Иркутская область</option>
					<option value="10142">142 - Кемеровская область</option>
					<option value="10150">150 - Московская область</option>
					<option value="10152">152 - Нижегородская область</option>
					<option value="10154">154 - Новосибирская область</option>
					<option value="10159">159 - Пермский край</option>
					<option value="10161">161 - Ростовская область</option>
					<option value="10163">163 - Самарская область</option>
					<option value="10164">164 - Саратовская область</option>
					<option value="10173">173 - Ульяновская область</option>
					<option value="10174">174 - Челябинская область</option>
					<option value="10177">177 - г. Москва</option>
					<option value="10178">178 - г. Санкт-Петербург</option>
					<option value="10186">186 - Ханты-Мансийский автономный округ - Югра</option>
					<option value="10190">190 - Московская область</option>
					<option value="10196">196 - Свердловская область</option>
					<option value="10197">197 - г. Москва</option>
					<option value="10199">199 - г. Москва</option>
					<option value="10750">750 - Московская область</option>
					<option value="10777">777 - г. Москва</option>
					<option value="11000">82 - Бывший Корякский автономный округ</option>
				</select>
				<br/><br/>
				<label>Начать с : <input type="number" name="start" value="<?=isset($_POST['start']) ? $_POST['start'] : 0; ?>"> месяца</label>
				<br/><br/>
				<a href="./" >Refresh</a>
				<br/><br/>
				<button type="submit" > Начать </button>
				<button type="submit" name="stop" value="1" onclick="return confirm('are you shure?');" > Остановить </button>
			</form>
	<script>
		var region = '<?=isset($_POST['region'])? $_POST['region'] : null; ?>';
		if(region){
			document.querySelectorAll('option[value="'+region+'"]')[0].setAttribute('selected',true);
		}
	</script>
		<?php 
			if(!isset($_POST['region']) || isset($_POST['stop'])){ 
				die;
			}
			touch($stop_file);
			ignore_user_abort(true);
			register_shutdown_function(function(){
				global $stop_file;
				file_exists($stop_file) && unlink($stop_file);
			});
			const SITE = 'http://avto-nomer.ru/';
			$result = [];
			$region = $_POST['region'];
			function search(){
				global $region;
				$dates = [];
				$step = 1;
				$i = isset($_POST['start']) ? (int)$_POST['start'] : 0;
				for( ; $i<110 ; ){
					$i += $step;
					$dates[$i] = [date('d.m.Y%2000:i:s' , strtotime('-' . $i . ' month')), date('d.m.Y%2000:i:s' , strtotime('-' . $i+$step . ' month'))];
					$hrefs = [];
					// continue;
					try{
						for($j=0; $j<100; $j++){
							// for($j=0; $j<100; $j++){
							$href = SITE . 'ru/gallery.php?region=' . $region . '&date1=' . $dates[$i][0] . '&date2=' . $dates[$i][1] . '&start=' . $j;
							
							$hrefs[$href] = ['href'=>$href, 'region'=>$region];
						}
						$mcurl = new \Curl\MultiCurl;
						$mcurl->setConcurrency(1);
						$mcurl->error(function($instance) use ($hrefs){
							p($instance->errorMessage . ' ' . $instance->url, 1);
						});
						$mcurl->complete(function($instance){
							global $stop_file;
							file_exists($stop_file) || p('Вызвана остановка' , 1, 1);
						});
						$mcurl->success(function($instance) use ($hrefs){
							global $result, $stop_file;
							$data = $instance->response;
							$region = $hrefs[$instance->url]['region'];
							$doc = phpQuery::newDocument($data);
							
							$links = pq('.panel .panel-body h4 a');
							isset($result[$region]) ||  ($result[$region] = []);
							if(count($links)<=1){
								$doc->unloadDocument();
								throw new Exception($instance->url . ' нет ссылок');
								return;
							}
							p($instance->url);
							foreach($links as $link){
								$link = $result[$region][] = pq($link)->attr('href');
								save_result($link, $region);
							}
							$doc->unloadDocument();
						});
						foreach($hrefs as $href){
							// p($href['href'],0);
							$mcurl->addGet($href['href']);
						}
						$mcurl->start();
						$mcurl->close();
						gc_collect_cycles();
					}
					catch(Exception $e){
						p($e->getMessage(), 1);
						gc_collect_cycles();
					}
				}
				// p($dates,1,1);
			}
			search();
			
			function save_result($link, $region, $extra = false){
				// p('ссылка ' . $link . ($extra ? ' - доп':' - напрямую'));
				$doc = phpQuery::newDocument(curl(SITE . $link));
				$nomer = trim(pq('h1.pull-left')->text());
				$img = pq('.panel-body .row a img')->attr('src');
				if(!exists($nomer, $region, $link) && $nomer != 'Номера нет на сайте!'){
					p('сохраняем ' . $nomer);
					save($nomer, $region, $link, $img);
				}
				elseif($nomer != 'Номера нет на сайте!'){
					p($nomer . ' уже есть', 1);
				}
				$imgs = pq('.row.bg-grey a');
				if($imgs){
					foreach($imgs as $_img){
						if(!exists($nomer, $region, '/ru/' . pq($_img)->attr('href')) ){
							p('сохраняем доп изображение '. $nomer,2);
							save_result('/ru/' . pq($_img)->attr('href'), $region, 1);
						}
					}
				}
				else {
					// p($link . ' нет доп ссылок',1);
				}
				$doc->unloadDocument();
			}
			
			function save($nomer, $region, $link, $img){
				$dir = get_dir_name($region, $nomer);
				// echo mb_substr($nomer, 0,2);
				// echo mb_substr($nomer, 1, 1);
				file_exists($dir) || mkdir($dir, null, 1);
			    $_img = preg_match('~/medium/~', $img) ? str_replace('/medium/','/original/', $img) : str_replace('/m/', '/o/', $img);
				$raw = @file_get_contents($_img);
				if(!$raw){
					// echo ' $%&-+()@#$%&+()@#$%&-+)) ' . $img;
					p('нет изображения ' . $img, 1);
				}
				// $ext = explode('.', $img);
				$ext = 'jpg';
				file_put_contents($dir . '/' . md5($link) . '.' . $ext, $raw);
			}
			function exists($nomer, $region, $img){
				$dir = get_dir_name($region, $nomer);
				$ext = 'jpg';
				return file_exists($dir . '/' . md5($img) . '.' . $ext);
			}
			
			function get_dir_name($region, $nomer){
				return 'nomera/' . $region . '/' . iconv('utf-8', 'cp1251', mb_substr($nomer, 0, 1)) . '/' . 
				// iconv('utf-8', 'cp1251', mb_substr($nomer, 1, 1)) . '/' . 
				iconv('utf-8', 'cp1251', $nomer);
			}
			
			
			function p($s, $t = 0, $die = 0){
				switch($t){
					case 0:
					$color='#485';break;
					case 1:
					$color='#944';break;
					case 2:
					$color='#459';break;
				}
			?>
			<div id='<?= ($hash = md5($s.time()))?>' style="margin:3px;color:<?=$color;?>;">
				<script>
					setTimeout(function(){ 
						if(document.getElementsByTagName('div').length < 1000){
							return;
						}
						Array.prototype.slice.call(document.getElementsByTagName('div')).slice(0, -1000).forEach(function(el){el.remove();});
					}, 1 );
				</script>
				<?=(is_array($s) ? '<pre>' . print_r($s,1) . '</pre>' : $s ) . ' ; memory usage: ' . number_format(memory_get_usage() / 1000000, 1, '.', ' ') . ' Mb';?>
			</div>
			<?php 
				ob_flush();
				flush();
				$die && die;
			}
			
			function translit($str){
				$str = preg_replace('~\s+~iUus',' ', mb_strtolower($str));
				$tr = array(
				"А"=>"a", "Б"=>"b", "В"=>"v", "Г"=>"g", "Д"=>"d",
				"Е"=>"e", "Ё"=>"yo", "Ж"=>"zh", "З"=>"z", "И"=>"i", 
				"Й"=>"j", "К"=>"k", "Л"=>"l", "М"=>"m", "Н"=>"n", 
				"О"=>"o", "П"=>"p", "Р"=>"r", "С"=>"s", "Т"=>"t", 
				"У"=>"u", "Ф"=>"f", "Х"=>"kh", "Ц"=>"ts", "Ч"=>"ch", 
				"Ш"=>"sh", "Щ"=>"sch", "Ъ"=>"", "Ы"=>"y", "Ь"=>"", 
				"Э"=>"e", "Ю"=>"yu", "Я"=>"ya", "а"=>"a", "б"=>"b", 
				"в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ё"=>"yo", 
				"ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k", 
				"л"=>"l", "м"=>"m", "н"=>"n", "о"=>"o", "п"=>"p", 
				"р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f", 
				"х"=>"kh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", "щ"=>"sch", 
				"ъ"=>"", "ы"=>"y", "ь"=>"", "э"=>"e", "ю"=>"yu", 
				"я"=>"ya", " "=>"-", "."=>"", ","=>"", "/"=>"-",  
				"*"=>"",":"=>"", "\""=>"", "'"=>"", ";"=>"","—"=>"", "–"=>"-"
				);
				return strtr($str,$tr);
			}
			
			
			function curl ($url, $post = null, $extra_headers = []) {
				global $cookie_file;
				
				$ch = curl_init($url);
				
				if($post){
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				}
				
				curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
				curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
				
				// curl_setopt($ch, CURLOPT_HEADER, true);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
				curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
				curl_setopt($ch,CURLOPT_ENCODING,'gzip,deflate');
				
				$headers = [
				// 'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
				'Accept-Encoding:gzip, deflate',
				// 'Accept-Language:ru,en-US;q=0.8,en;q=0.6',
				// 'Cache-Control:max-age=0',
				// 'Connection:keep-alive',
				// 'Cookie:PHPSESSID=54517f45edeebe2aa1105617a7d0eb80; ALTASIB_SITETYPE=original; _ym_uid=1487770247474786456; BX_USER_ID=f56519b68a9fad68d64107859d50a280; WhiteCallback_shownOn=onshow; WhiteCallback_noShowWindow=1; WhiteCallback_noShowOnExit=1; _ym_isad=1; BITRIX_SM_sort=sort; BITRIX_SM_order=asc; BITRIX_SM_limit=12; BITRIX_SM_view=table; BITRIX_CONVERSION_CONTEXT_s1=%7B%22ID%22%3A1%2C%22EXPIRE%22%3A1488574740%2C%22UNIQUE%22%3A%5B%22conversion_visit_day%22%5D%7D; _ga=GA1.2.873273508.1487770247; _ym_visorc_30695403=w; WhiteCallback_visitorId=250654453; WhiteCallback_visit=393098121; BITRIX_SM_GUEST_ID=660385; BITRIX_SM_LAST_VISIT=03.03.2017+07%3A32%3A38; BITRIX_SM_ALTASIB_LAST_IP=94.180.119.184; BITRIX_SM_ALTASIB_GEOBASE=%7B%22ID%22%3A%222012%22%2C%22BLOCK_BEGIN%22%3A%221588858880%22%2C%22BLOCK_END%22%3A%221588887551%22%2C%22BLOCK_ADDR%22%3A%2294.180.16.0+-+94.180.127.255%22%2C%22COUNTRY_CODE%22%3A%22RU%22%2C%22CITY_ID%22%3A%222012%22%2C%22CITY_NAME%22%3A%22%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%22%2C%22REGION_NAME%22%3A%22%D0%9D%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%22%2C%22COUNTY_NAME%22%3A%22%D0%A1%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B8%D0%B9+%D1%84%D0%B5%D0%B4%D0%B5%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9+%D0%BE%D0%BA%D1%80%D1%83%D0%B3%22%2C%22BREADTH_CITY%22%3A%2255.03923%22%2C%22LONGITUDE_CITY%22%3A%2282.927818%22%7D; BITRIX_SM_ALTASIB_GEOBASE_COUNTRY=%7B%22country%22%3A%22RU%22%7D; BITRIX_SM_SALE_UID=6392016; BITRIX_SM_ALTASIB_GEOBASE_RDR=Y; WhiteCallback_openedpage_HjWxu=1488516159; WhiteCallback_timeAll=96957; WhiteCallback_timePage=1236',
				// 'Host:mototeka.su',
				// 'Upgrade-Insecure-Requests:1',
				// 'User-Agent:Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36',
				
				];
				
				$headers = array_merge($headers, $extra_headers);
				
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLINFO_HEADER_OUT,1);
				$response = curl_exec($ch);
				$information = curl_getinfo($ch,CURLINFO_HEADER_OUT);
				
				// fclose($cookie_file);
				
				// p($information,0);
				if($curl = curl_error($ch)){
					throw new Exception($curl);
				}
				curl_close($ch);
				return $response;
				return iconv('cp-1251','utf-8',$response);
			}	
				