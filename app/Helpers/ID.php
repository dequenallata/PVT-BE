<?php

namespace Muserpol\Helpers;

class ID
{
	/**
	* Retorna el id cuando es editable
	*
	* @return int 1
	*/
	public static function getEditableId()
	{
		return 1;
	}

	/**
	* Retorna el id cuando no es editable
	*
	* @return int 0
	*/
	public static function getNonEditableId()
	{
		return 0;
	}

	/**
	* Retorna un tipo de solicitante
	*
	* @return un objeto retfun
	*/
	public static function applicant()
	{
		$ret_fun = [
			'beneficiary_id'	=>	1,
			'advisor_id'	=>	2,
			'legal_guardian_id'	=>	3
		];
		return((object)$ret_fun);
	}

	/**
	* Retorna una modalidad para fondo de retiro
	*
	* @return un objeto retfun
	*/
	public static function retFun()
	{
		$ret_fun = [
			'jubilacion_id'	=>	3,
			'fallecimiento_id'	=>	4,
			'retiro_forzoso_id'	=>	5,
			'invalidez_permanente_id'	=>	6,
			'retiro_voluntario_id'	=>	7
		];
		return((object)$ret_fun);
	}

	/**
	* Retorna una modalidad en pago global  de fondo de retiro
	*
	* @return un objeto ret_fun Global_pay
	*/
	public static function retFunGlobalPay()
	{
		$global_pay = [
			'fallecimiento_id'	=>	1,
			'retiro_forzoso_id'	=>	2
		];
		return((object)$global_pay);
	}

	/**
	* Retorna algun parentesco con el afiliado
	*
	* @return un objeto kinship
	*/
	public static function kinship()
	{
		$ids = [
			'titular'	=>	1,
			'conyuge'	=>	2,
			'hijo'	=>	3,
			'padre'	=>	4,
			'madre'	=>	5,
			'hermano'	=>	6,
			'otro'	=>	7
		];
		return((object)$ids);
	}

	/**
	* Retorna el id de algun departamento
	*
	* @return un objeto cityId
	*/
	public static function cityId()
	{
		$ids = [
			'BN' => 1,
			'CH' => 2,
			'CB' => 3,
			'LP' => 4,
			'OR' => 5,
			'PD' => 6,
			'PT' => 7,
			'SC' => 8,
			'TJ' => 9,
			'BO' => 10
		];
		return((object)$ids);
	}

	/**
	* Retorna el estado del afiliado
	*
	* @return un objeto affiliateState
	*/
	public static function affiliateState()
	{
		$ids = [
			'servicio'	=>	1,
			'comision'	=>	2,
			'disponibilidad'	=>	3,
			'fallecido'	=>	4,
			'jubilado'	=>	5,
			'invalidez'	=>	6,
			'baja_forzoso'	=>	7,
			'baja_voluntario'	=>	8,
			'baja_temporal'	=>	9,
			'agregado_policial'=>10
		];
		return((object)$ids);
	}

	/**
	* Retorna el estado en que se encuentra
	*
	* @return un objeto retFunState
	*/
	public static function state()
	{
		$ids = [
			'en_proceso'	=>	1,
			'pendiente'	=>	2,
			'eliminado'	=>	3
			];
		return((object)$ids);
	}

	/**
	* Retorna el tipo de beneficiario
	*
	* @return un objeto de beneficiario
	*/
	public static function beneficiary()
	{
		$ids = [
			'solicitante'	=>	"S",
			'normal'	=>	"N"
			];
		return((object)$ids);
	}

}
