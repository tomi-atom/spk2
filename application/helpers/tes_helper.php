<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }   
}

if ( ! function_exists('NilaiPreferensi')) {

	function NilaiPreferensi($tp='', $f_jka, $f_q, $f_p='', $f_bobot)
		{
			$negatif = -1*abs($f_p);

			if ($tp == '1') {
				
			}

			elseif ($tp == '2') {
				# code...
			}

			elseif ($tp == '3') {
				if(($negatif <= $f_jka) AND ($f_jka <= $f_p))
				{
					return $f_jka/$f_p;
				}
				elseif(($f_jka < $negatif) AND ($f_jka > $f_p))
				{
					
				}
				else
				{return 1;}
			}
		}
	
}

if (! function_exists('tresholdP')) {

	function tresholdP($kriteria)
	{

		$CI = &get_instance();
        $CI->load->model ( 'Data_model' );
		return $data = $CI->Data_model->tresholdP($kriteria);
	}
	
}

if (! function_exists('tresholdQ')) {

	function tresholdQ($kriteria)
	{
		$CI = &get_instance();
        $CI->load->model ( 'Data_model' );
		return $data = $CI->Data_model->tresholdQ($kriteria);
	}
	
}

?>