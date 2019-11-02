
<script type="text/javascript" src="{{asset('frontend')}}/assets/app-assets/js/notifIt.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/app-assets/css/notifIt.css">
@if (session('error'))
<script type="text/javascript">
notif({
	msg: "{{ session('error') }}",
	type: "error",
	position: "left",
	color: "white",
});
</script>
@endif

@if (session('success'))
<script type="text/javascript">
notif({
	msg: "{{ session('success') }}",
	type: "success",
	position:"right",
	bgcolor: "blue",
	color: "#fff",
});
</script>
@endif
@if ($errors->any())
  @php $msg =""; @endphp
            @foreach ($errors->all() as $error)
			@php $msg .= '\n'.$error; @endphp
            @endforeach
  @php $msg .= ""; @endphp
<script type="text/javascript">
notif({
	msg: "{{ $msg }}",
	type: "error",
    position: "center",
    timeout: 30000,
	multiline: 1,
	bgcolor: "red",
    color: "#fff",
	clickable: true

});
</script>
@endif
