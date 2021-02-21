						<?php 
			
				$urls = array(
				'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
				);
				$api = 'http://data.zz.baidu.com/urls?site=https://xiamuyourenzhang.cn&token=OWYiTZcIYZ1dwEcD';
				$ch = curl_init();
				$options =  array(
					CURLOPT_URL => $api,
					CURLOPT_POST => true,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_POSTFIELDS => implode("\n", $urls),
					CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
				);
				curl_setopt_array($ch, $options);
				
				//原版
				//$result = curl_exec($ch);
				//echo $result;
				
				//第二种 的返bai结果是以json形式。
				$res=json_decode(curl_exec($ch),true);
		
				$ed = ($res['remain']);//起作用
				$cg = ($res['success']);//起作用	
			
				 ?>	