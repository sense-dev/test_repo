<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2014 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once CLASS_EX_REALDIR . 'page_extends/mypage/LC_Page_AbstractMypage_Ex.php';

/**
 * サイト概要のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id:LC_Page_Abouts.php 15532 2007-08-31 14:39:46Z nanasess $
 */
class LC_Page_Mypage_Pkg_Notice extends LC_Page_AbstractMypage_Ex
{
    /**
     * Page を初期化する.
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        $this->tpl_subtitle = '包裹预报';
        $this->tpl_mypageno = 'pkg_notice';
        $masterData = new SC_DB_MasterData_Ex();
        $this->arrDeliveryComp = $masterData->getMasterData('mtb_deliver_company');
        $this->httpCacheControl('nocache');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    public function process()
    {
        parent::process();
//        $this->action();
//        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    public function action()
    {
    	$objFormParam = new SC_FormParam_Ex();
     	SC_Helper_Package::sfPkgNoticeParam($objFormParam);
    	$objFormParam->setParam($_POST);

    	switch ($this->getMode()) {
    		case 'confirm':

    			break;

    		case 'complete':
//     			$this->arrErr = SC_Helper_Package::sfPkgNoticeErrorCheck($objFormParam);
//     			if (empty($this->arrErr)) {
//     				$this->lfRegistPkgData($this->lfMakeSqlVal($objFormParam));
//     				SC_Response_Ex::sendRedirect('pkg_info.php');
//     			}
    			break;

    		case 'return':
    			break;
    		default:
//     			$objFormParam->setParam(SC_Helper_Customer_Ex::sfGetCustomerData($customer_id));
    			break;
    	}

    	$this->arrForm = $objFormParam->getFormParamList();
    }

    public function lfMakeSqlVal(&$objFormParam)
    {
    	$arrForm                = $objFormParam->getHashArray();
    	$arrResults             = $objFormParam->getDbArray();

    	$objCustomer = new SC_Customer_Ex();
    	$arrResults['c_id'] = $objCustomer->getValue('c_id');

    	$arrResults['delivery_company']    = $arrForm['delivery_company'];
    	$arrResults['package_no']    = $arrForm['package_no'];
    	$arrResults['comment']    = $arrForm['comment'];

    	return $arrResults;
    }

    public function lfRegistPkgData($sqlval)
    {
    	echo $sqlval;
    	SC_Helper_Package::sfEditPkgData($sqlval);
    }
}
