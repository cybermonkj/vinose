<div style="margin-left:auto;margin-right:auto;">
<style media="all">
	@import url('https://fonts.googleapis.com/css?family=Dejavu+Sans:400,700');
	*{
		margin: 0;
		padding: 0;
		line-height: 1.5;
		font-family: 'Dejavu Sans', sans-serif;
		color: #333542;
	}
	div{
		font-size: 1rem;
	}
	.gry-color *,
	.gry-color{
		color:#878f9c;
	}
	table{
		width: 100%;
	}
	table th{
		font-weight: normal;
	}
	table.padding th{
		padding: .5rem .7rem;
	}
	table.padding td{
		padding: .7rem;
	}
	table.sm-padding td{
		padding: .2rem .7rem;
	}
	.border-bottom td,
	.border-bottom th{
		border-bottom:1px solid #eceff4;
	}
	.text-left{
		text-align:left;
	}
	.text-right{
		text-align:right;
	}
	.small{
		font-size: .85rem;
	}
	.strong{
		font-weight: bold;
	}
</style>

	@php
		$generalsetting = \App\GeneralSetting::first();
	@endphp

	<div style="background: #eceff4;padding: 1.5rem;">
		<table>
			<tr>
				<td>
					@if($generalsetting->logo != null)
						<img src="{{ my_asset($generalsetting->logo) }}" height="40" style="display:inline-block;">
					@else
						<img src="{{ static_asset('frontend/images/logo/logo.png') }}" height="40" style="display:inline-block;">
					@endif
				</td>
			</tr>
		</table>

	</div>

	<div style="border-bottom:1px solid #eceff4;margin: 0 1.5rem;"></div>

    <div style="padding: 1.5rem;">
		<table class="padding text-left small border-bottom">
			<thead>
                <tr class="gry-color" style="background: #eceff4;">
                    <th width="50%">{{translate('Brand Name') }}</th>
                    <th width="50%">{{translate('ID') }}</th>
                </tr>
			</thead>
			<tbody class="strong">
                @foreach ($brands as $key => $brand)
	                <tr class="">
						<td>{{ $brand->name }}</td>
						<td>{{ $brand->id }}</td>
					</tr>
				@endforeach
            </tbody>
		</table>
	</div>

</div>
