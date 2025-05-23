Dear {{ $data1['name'] }},

Your Clankart account is successfully created using {{ $data1['email'] }}.
You can login to your Clankart account by 
<a href="http://127.0.0.1:8000/verifyAccount/{{ $data1['email'] }}/{{ $data1['token'] }}">Clicking here</a>.