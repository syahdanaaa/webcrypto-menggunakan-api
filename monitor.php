<?php

$koin = explode(",",$_GET['coin']);
$num = count($koin);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" class="sid-plesk">
<head>
    <title>Monitor</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
	<style>
		body{
			background:#000;
		}
		#left{
			float:left;
			width:60%;
			height:96%;
			margin:none;
			padding:none;
		}
		#div30{
			float:left;
			width:33%;
			height:calc(50% + 16px)
		}
		#right{
			float:left;
			width:40%;
			height:50%;
			margin:none;
			padding:none;
		}
		#right2{
			float:left;
			width:40%;
			height:50%;
			margin-top:-32px;
			padding:none;
		}
		#right2a{
			float:left;
			width:50%;
			height:100%;
			margin-top:-5px;
			padding:none;
		}
		#ticker{
			float:left;
			width:100%;
			height:50px;
			margin-top:-32px;
		}
	</style>
	<script type="text/javascript">
			function zoom() {
				document.body.style.zoom = "80%" 
			}
	</script>
</head>
<body onload="zoom()">

	<div id="left">
		<div id="div30" >
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[0]."USDT"; ?>",
			  "interval": "60",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
		<div id="div30" >
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[1]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
		<div id="div30" >
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[2]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
		<div id="div30" style=margin-top:-32px;>
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[3]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
		<div id="div30" style=margin-top:-32px;>
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[4]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
		<div id="div30" style=margin-top:-32px;>
			<!-- TradingView Widget BEGIN -->
			<div class="tradingview-widget-container">
			  <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
			  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
			  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
			  {
			  "autosize": true,
			  "symbol": "BINANCE:<?php echo $koin[5]."USDT"; ?>",
			  "interval": "D",
			  "timezone": "Asia/Jakarta",
			  "theme": "dark",
			  "style": "1",
			  "locale": "id",
			  "enable_publishing": false,
			  "allow_symbol_change": true,
			  "studies": [
				"STD;RSI",
				"STD;Stochastic_RSI"
			  ],
			  "support_host": "https://www.tradingview.com"
			}
			  </script>
			</div>
			<!-- TradingView Widget END -->
		</div>

		
	</div>
	<div id="right">
		<div id="right2a">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
		  {
		  "interval": "1h",
		  "width": "100%",
		  "isTransparent": true,
		  "height": "100%",
		  "symbol": "BINANCE:<?php echo $koin[0]."USDT"; ?>",
		  "showIntervalTabs": true,
		  "displayMode": "single",
		  "locale": "id",
		  "colorTheme": "dark"
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->
		</div>
		<div id="right2a">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
		  {
		  "interval": "1h",
		  "width": "100%",
		  "isTransparent": true,
		  "height": "100%",
		  "symbol": "BINANCE:<?php echo $koin[1]."USDT"; ?>",
		  "showIntervalTabs": true,
		  "displayMode": "single",
		  "locale": "id",
		  "colorTheme": "dark"
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->
		</div>
	</div>
	<div id="right2">
		<div id="right2a">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
		  {
		  "interval": "1h",
		  "width": "100%",
		  "isTransparent": true,
		  "height": "100%",
		  "symbol": "BINANCE:<?php echo $koin[2]."USDT"; ?>",
		  "showIntervalTabs": true,
		  "displayMode": "single",
		  "locale": "id",
		  "colorTheme": "dark"
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->
		</div>
		<div id="right2a">
		<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
		  {
		  "interval": "1h",
		  "width": "100%",
		  "isTransparent": true,
		  "height": "100%",
		  "symbol": "BINANCE:<?php echo $koin[3]."USDT"; ?>",
		  "showIntervalTabs": true,
		  "displayMode": "single",
		  "locale": "id",
		  "colorTheme": "dark"
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->
		</div>
	</div>
	<div id="ticker">
		
			<!-- TradingView Widget BEGIN -->
		<div class="tradingview-widget-container">
		  <div class="tradingview-widget-container__widget"></div>
		  <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text" style="visibility:hidden;">Lacak seluruh pasar di TradingView</span></a></div>
		  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
		  {
		   "symbols": [
    <?php
        $i=0;
        foreach($koin as $coin){
            $i++;
    ?>
    {
      "description": "",
      "proName": "<?php echo $coin."USDT"; ?>"
    }
    <?php
        if($i!=$num)
            echo ",";
        }
    ?>
  ],
		  "showSymbolLogo": true,
		  "isTransparent": false,
		  "displayMode": "adaptive",
		  "colorTheme": "dark",
		  "locale": "id"
		}
		  </script>
		</div>
		<!-- TradingView Widget END -->
	
	</div>


</body>
</html>
