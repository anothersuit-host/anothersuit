<template>
	<div id='app' v-bind:class="{ contact: $route.path === '/contact' }">
		<nav>
			<ul>
				<li id='logo'>
					<router-link to='/'>matt ricks</router-link>
				</li>
				<li>
					<router-link id='back' v-show='$route.params.id' to='/'><ion-icon name='arrow-back-outline'></ion-icon></router-link>
					<router-link v-show='!$route.params.id' to='/'>Work</router-link>
				</li>
				<li id='contact'>
					<router-link to='/contact'>Contact</router-link>
				</li>
			</ul>
		</nav>

		<main>
			<router-view></router-view>
		</main>

		<footer>
			2021 &#169 Matt Ricks
		</footer>
	</div>
</template>


<script>
export default
{
	name: 'App',
	metaInfo:
	{
		title: 'Matt Ricks',
		meta: [
			{ charset: 'utf-8' },
			{ name: 'description', content: 'Personal portfolio of Matt Ricks' },
			{ name: 'viewport', content: 'width=device-width, initial-scale=1' }
		]
	}
}
</script>


<style lang='scss'>
	@import '/styles/global.scss';

	body
	{
		margin: 0;
		background-color: #000000;
	}

	#app
	{
		font-family: Helvetica;
	}


	a
	{
		color: #FFFFFF;
		text-decoration: none;
	}

	h1
	{
		color: #FFFFFF;
	}

	nav
	{
		position: fixed; top: 0px;
		
		ul
		{
			padding: 0;
			margin: 30px 0;
			background-color: #000000;

			li
			{
				
				padding-top: 10px;
				padding-bottom: 10px;
				list-style: none;
				list-style-type: none;

				display: inline-block;
				position: relative;
				top: -4px;

				&#logo
				{
					font-size: 1.5em;
					padding-left: 0;
					padding-right: 2px;
					top: 0px;

					a
					{
						color: #000000;
						background-color: #FFFFFF;
					}
				}

				&#contact
				{
					margin-right: 6px;
				}

				#back
				{
					color: #FFFFFF;

					ion-icon
					{
						vertical-align: middle;
					}
				}

				a
				{
					padding: 10px;
					font-size: 1.3em;
					font-weight: bold;

					&:active, &:hover
					{
						color: #000000;
						background-color: #FFFFFF;

						ion-icon
						{
							color: #000000;
						}
					}
				}
			}
		}
	}

	
	.contact
	{
		padding-top: 108px;
	}


	#email
	{
		margin: 0;
		font-weight: bold;
		
		padding: 20px;
		font-size: 2em;
		color: #000000;
		background-color: #FFFFFF;

		float: left;
		
		&:hover
		{
			padding: 20px;
		}
	}

	main
	{
		@extend .clearfix;
	}

	footer
	{
		margin: 40px 0;
		color: #FFFFFF;
		text-align: center;
	}
</style>