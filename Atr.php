
<?php

// FB : Riky indra

echo "Masukkan token : ";

echo "Masukkan Jumlah Suntik : ";

			sleep($wait);

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://com.cari.promo.diskon/$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

				$headers[] = "Cookie: u=$uid;n=$n";

				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function video($uid,$n){

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://com.cari.promo.diskon/$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Cookie: u=$uid;n=$n";

					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function share($uid,$n){

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://com.cari.promo.diskon/$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Cookie: u=$uid;n=$n";

					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function code($uid,$n){

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://com.cari.promo.diskon/$rand");

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Cookie: u=$uid;n=$n";

					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function klik($uid,$n){

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://com.cari.promo.diskon/$rand");

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			$headers = array();

					$headers[] = "Cookie: u=$uid;n=$n";

					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

?>

