<?PHP

class Shift
{
	public static function add($text)
	{
		$text = str_replace('-', '~', trim($text));
		$text = preg_replace('/\s+/', '-', $text);


		return $text;
	}

	public static function remove($text)
	{
		$text = str_replace('-', ' ', ($text));
		$text = str_replace('~', '-', ($text));

		return $text;
	}
}