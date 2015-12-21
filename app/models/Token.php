<?PHP
//CSRF protection
class Token
{

	public static function create()
	{
		return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
	}

	public static function check($token)
	{
		if(isset($_SESSION['token']) && $_SESSION['token'] === $token)
		{
			unset($_SESSION['token']);
			return true;
		}
		else
		{
			return false;
		}
	}

}