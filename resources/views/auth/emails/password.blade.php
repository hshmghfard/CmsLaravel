اگه رمز عبور خودتان را به خاطر نمی یارید روی لینک دریافت شده کلیک نمایید.
http://www.pcstudent.ir

<p></p>
<br/>


برای بازیابی رمز عبور خودتان بر روی این لینک کلیک کنید: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
