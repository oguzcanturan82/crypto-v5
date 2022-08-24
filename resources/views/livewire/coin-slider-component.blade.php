<div>
    <?php
        require_once("imports/base-css.php");
        BaseCss();
    ?>

    <div class="btc-ticker">
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="usd"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="eur"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="jpy"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="gbp"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="chf"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="aud"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="cad"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="nzd"></div>
			</div>
			<div class="ticker-item">
				<div class="btcwdgt-price" bw-cur="nzd"></div>
			</div>
      	</div>

    <?php
        require_once("imports/base-js.php");
        BaseJs();
    ?>
	<script>
		(function(b,i,t,C,O,I,N) {
		window.addEventListener('load',function() {
			if(b.getElementById(C))return;
			I=b.createElement(i),N=b.getElementsByTagName(i)[0];
			I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
		},false)
		})(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
	</script>
</div>
