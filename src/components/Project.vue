<template>
	<div>
		<div v-if="$route.params.id === '1'" class='project'>
			<img src='/assets/matics_large.jpg'/>
		</div>
		<div v-if="$route.params.id === '2'" class='project'>
			<img src='/assets/cosmonot_large.jpg'/>
		</div>
		<div v-if="$route.params.id === '3'" class='project'>
			<img src='/assets/napa_large.jpg'/>
			<img src='/assets/napa_large_2.jpg'/>

			<p class='caption'>
				Concept and prototype for Napa Autoparts National Standings dashboard
			</p>
		</div>
		<div v-if="$route.params.id === '4'" class='project'>
			<p class='caption'>Magazine to web, showcasing the local culture from stores to events</p>
			<img src='/assets/livingspaces_large.jpg'/>
			<img src='/assets/livingspaces_large_2.jpg'/>
			<img src='/assets/livingspaces_large_3.jpg'/>
		</div>
		<div v-if="$route.params.id === '5'" class='project'>
			<p class='caption'>
				Concept for locally owned and operated small business
				<a class='visit' target='_blank' href='https://anothersuit.000webhostapp.com/turfpatrol'>Visit</a>
			</p>
			<img src='/assets/turfpatrol_large.jpg'/>
		</div>
		<div v-if="$route.params.id === '6'" class='project'>
			<p class='caption'>
				Locally owned and operated small business
				<a class='visit' target='_blank' href='https://anothersuit.000webhostapp.com/addisontruck'>Visit</a>
			</p>
			<img src='/assets/addisontruck_large.jpg'/>
			<img src='/assets/addisontruck_large_2.jpg'/>
			<img src='/assets/addisontruck_large_3.jpg'/>
		</div>
		<div v-if="$route.params.id === '7'" class='project'>
			<p class='caption'>
				Locally owned and operated small business
				<a class='visit' target='_blank' href='https://anothersuit.000webhostapp.com/tricountypools'>Visit</a>
			</p>
			<img src='/assets/tricountypools_large.jpg'/>
			<img src='/assets/tricountypools_large_2.jpg'/>
			<img src='/assets/tricountypools_large_3.jpg'/>
			<img src='/assets/tricountypools_large_4.jpg'/>
		</div>
		<div v-if="$route.params.id === '8'" class='project'>
			<p class='caption'>
				Locally owned and operated small business
				<a class='visit' target='_blank' href='https://anothersuit.000webhostapp.com/bitjewellery'>Visit</a>
			</p>
			<img src='/assets/bitjewellery_large.jpg'/>
			<img src='/assets/bitjewellery_large_2.jpg'/>
			<img src='/assets/bitjewellery_large_3.jpg'/>
			<img src='/assets/bitjewellery_large_4.jpg'/>
			<img src='/assets/bitjewellery_large_5.jpg'/>
		</div>
		<div v-if="$route.params.id === '9'" class='project'>
			<p class='caption'>
				Locally owned and operated small business
				<a class='visit' target='_blank' href='https://anothersuit.000webhostapp.com/sauble'>Visit</a>
			</p>
			
			<img src='/assets/sauble_large_2.jpg'/>
			<img src='/assets/sauble_large_3.jpg'/>
		</div>
	</div>
</template>


<style lang='scss'>
	@import '../styles/global.scss';
	
	.project
	{
		width: 100%;
		
		.caption
		{
			padding: 10px;
			padding-right: 6px;
			font-size: 15px;
			color: #FFFFFF;
			background-color: #000000;

			position: fixed;
			bottom: 0px;
			right: 20px;

			.visit
			{
				margin-left: 10px;

				color: #000000;
				padding: 5px;
				background-color: #FFFFFF;
			}
		}

		img
		{
			width: 100%;
			max-width: 1250px;

			margin-bottom: 40px;
			margin-left: auto; margin-right: auto;

			border: 15px solid #FFFFFF;
			box-sizing: border-box;

			&:last-child
			{
				margin-bottom: 0px;
			}
		}
	}


	@import '../styles/queries.scss';
</style>


