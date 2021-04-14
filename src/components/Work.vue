<template>
	<div id='portfolio'>
		<div class='work'>
			<router-link to='/work/1'><img src='assets/matics_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/2'><img src='assets/cosmonot_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/3'><img src='assets/napa_thumb.jpg'/></router-link>
		</div>
		

		<div class='work'>
			<router-link to='/work/4'><img src='assets/livingspaces_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/5'><img src='assets/turfpatrol_thumb.jpg'/></router-link>
		</div>

		<div class='work'>
			<router-link to='/work/6'><img src='assets/addisontruck_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/7'><img src='assets/tricountypools_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/8'><img src='assets/bitjewellery_thumb.jpg'/></router-link>
		</div>
		<div class='work'>
			<router-link to='/work/9'><img src='assets/sauble_thumb.jpg'/></router-link>
		</div>
	</div>
</template>


<style lang='scss'>
	@import '../styles/global.scss';

	#portfolio
	{
		width: 100%;
		display: block;
		clear: left;

		padding-top: 100px;

		@extend .clearfix;
	}

	.work
	{
		padding: 15px;
		width: 33.3333%;
		box-sizing: border-box;
		margin-bottom: 60px; float: left;
		
		img
		{
			display: block;
			margin: 0 auto;

			box-sizing: border-box;
			border: 15px solid #FFFFFF;
		}
	}

	@import '../styles/queries.scss';
</style>