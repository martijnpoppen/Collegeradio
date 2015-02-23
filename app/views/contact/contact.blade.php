<html>
<body>

{{ Form:: open(array('url' => 'contact_request')) }} 

@foreach($errors->all('
:message
') as $message) {{ $message }} @endforeach

{{ Form:: label ('first_name', 'First Name*' )}}
{{ Form:: text ('first_name', '' )}}

{{ Form:: label ('last_name', 'Last Name*' )}}
{{ Form:: text ('last_name', '' )}}

{{ Form:: label ('phone_number', 'Phone Number' )}}
{{ Form:: text ('phone_number', '', array('placeholder' => '0280021xx')) }}

{{ Form:: label ('email', 'E-mail Address*') }}
{{ Form:: email ('email', '', array('placeholder' => 'me@example.com')) }}

{{ Form:: label ('subject', 'Subject') }}
{{ Form:: select ('subject', array(
'1' => '1',
'2' => '2',
'3' => '3',
'4' => '4'), '1' ) }}

{{ Form:: label ('message', 'Message*' )}}
{{ Form:: textarea ('message', '')}}

{{ Form::submit('Verzenden', array('class' => 'you css class for button')) }}

{{ Form:: close() }}
</body>
</html>