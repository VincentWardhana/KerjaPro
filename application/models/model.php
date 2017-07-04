<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
	
	public function insert($tablename,$data)
	{
		$this->db->insert($tablename,$data);
	}
	
	public function update($tablename,$data,$where)
	{
		$this->db->update($tablename,$data,$where);
	}
	
	public function delete($tablename,$where)
	{
		$this->db->delete($tablename,$where);
	}
	
	public function getbanner()
	{
		$this->db->from('banner');
		return $this->db->get()->result_array();
	}
	
	public function getbannermobile()
	{
		$this->db->from('bannermobile');
		return $this->db->get()->result_array();
	}
	
	public function getcustomerid($email,$password)
	{
		$this->db->select('CustomerID');
		$this->db->from('CustomerLogin');
		$this->db->where('Email',$email);
		if ($password!="")
		{
			$this->db->where('Password',$password);
		}
		return $this->db->get()->result_array();
	}
	
	public function getcustomerdata($customerid)
	{
		$this->db->select('*');
		$this->db->from('CustomerData');
		$this->db->where('CustomerID',$customerid);
		return $this->db->get()->result_array();
	}
	
	public function getcustomerlogindata($customerid)
	{
		$this->db->select('*');
		$this->db->from('CustomerLogin');
		$this->db->where('CustomerID',$customerid);
		return $this->db->get()->result_array();
	}
	
	public function getlastproductcollections()
	{
		$this->db->select('CollectionID');
		$this->db->from('Product');
		$this->db->order_by("CollectionID", "desc");
		$this->db->group_by('CollectionID'); 
		$this->db->limit(2);
		return $this->db->get()->result_array();
	}

	public function getlastcollectionproductcategories($collectionid1,$collectionid2)
	{
		$this->db->select('CategoryID');
		$this->db->from('Product');
		$this->db->group_by('CategoryID');
		$this->db->where('collectionID',$collectionid1);
		$this->db->or_where('collectionID',$collectionid2);
		return $this->db->get()->result_array();
	}
	
	public function getcategory($categoryid)
	{
		$this->db->select('Category');
		$this->db->from('Category');
		$this->db->where('CategoryID',$categoryid);
		return $this->db->get()->result_array();
	}
	
	public function getcollection($collectionid)
	{
		$this->db->select('Collection');
		$this->db->from('Collection');
		$this->db->where('collectionID',$collectionid);
		return $this->db->get()->result_array();
	}
	
	public function getcategorysubproductlist($categoryid)
	{
		$this->db->select('*');
		$this->db->from('SubProduct sp, Product p, Category c');
		$this->db->where('sp.ProductID = p.ProductID');
		$this->db->where('p.CategoryID = c.CategoryID');
		$this->db->where("c.Category not like 'Portfolio'");
		
		if ($categoryid!="" && $categoryid!="new")
		{
			$this->db->where('p.CategoryID',$categoryid);
		}
		
		$this->db->group_by("p.ProductID");
		
		if ($categoryid=="new")
		{
			$this->db->order_by("sp.AddedTime", "desc");
		}
		
		return $this->db->get()->result_array();
	}
	
	public function getportfoliolist($portfoliosubproductid)
	{
		$this->db->select('*');
		$this->db->from('SubProduct sp, Product p');
		$this->db->where('sp.ProductID = p.ProductID');
		$this->db->where('p.SubCategoryID',$portfoliosubproductid);
		return $this->db->get()->result_array();
	}
	
	public function getportfoliosubcategoryid()
	{
		$this->db->select('SubCategoryID');
		$this->db->from('SubCategory');
		$this->db->where('SubCategory','Portfolio');
		return $this->db->get()->result_array();
	}
	
	public function getcollectionsubproductlist($collectionid)
	{
		$this->db->select('*');
		$this->db->from('SubProduct sp, Product p, Category c');
		$this->db->where('sp.ProductID = p.ProductID');
		$this->db->where('p.CategoryID = c.CategoryID');
		$this->db->where("c.Category not like 'Portfolio'");
		if ($collectionid!="")
		{
			$this->db->where('p.CollectionID',$collectionid);
		}
		
		$this->db->group_by('p.ProductID');
		
		return $this->db->get()->result_array();
	}
	
	public function getproduct($productid)
	{
		$this->db->select('*');
		$this->db->from('Product');
		$this->db->where('ProductID',$productid);
		return $this->db->get()->result_array();
	}
	
	public function getproductid($subproductid)
	{
		$this->db->select('ProductID');
		$this->db->from('SubProduct');
		$this->db->where('SubProductID',$subproductid);
		return $this->db->get()->result_array();
	}
	
	public function getproductcolorlist($productid)
	{
		$this->db->select('Color');
		$this->db->from('SubProduct');
		$this->db->where('ProductID',$productid);
		return $this->db->get()->result_array();
	}
	
	public function getsubproductpicture($subproductid)
	{
		$this->db->select('*');
		$this->db->from('SubProductPicture');
		$this->db->where('SubProductID',$subproductid);
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}
	
	public function getsubproductpicturelist($subproductid)
	{
		$this->db->select('*');
		$this->db->from('SubProductPicture');
		$this->db->where('SubProductID',$subproductid);
		return $this->db->get()->result_array();
	}
	
	public function getproductcategory($productid)
	{
		$this->db->select('CategoryID');
		$this->db->from('Product');
		$this->db->where('ProductID',$productid);
		return $this->db->get()->result_array();
	}
	
	public function getsubproductdetail($subproductid)
	{
		$this->db->select('*');
		$this->db->from('SubProduct');
		$this->db->where('SubProductID',$subproductid);
		return $this->db->get()->result_array();
	}
	
	public function getsubproductsize($subproductid)
	{
		$this->db->select('*');
		$this->db->from('subproductsize');
		$this->db->where('SubProductID',$subproductid);
		return $this->db->get()->result_array();
	}
	
	public function getsize($sizeid)
	{
		$this->db->select('*');
		$this->db->from('Size');
		$this->db->where('SizeID',$sizeid);
		return $this->db->get()->result_array();
	}
	
	public function getcookielist()
	{
		$this->db->select('Cookie');
		$this->db->from('Cart');
		$this->db->group_by('Cookie');
		return $this->db->get()->result_array();
	}
	
	public function getmaxcookie()
	{
		$this->db->select_max('Cookie');
		$this->db->from('Cart');
		return $this->db->get()->result_array();
	}
	
	public function getsubproductcart($customerid,$cookie,$subproductid,$size)
	{
		$this->db->select('Qty, Size');
		$this->db->from('Cart');
		$this->db->where('Size',$size);
		$this->db->where('SubProductID',$subproductid);
		$this->db->where('Cookie',$cookie);
		if ($customerid!="")
		{
			$this->db->or_where('CustomerID',$customerid); 
		}
		return $this->db->get()->result_array();
	}
	
	public function getrandomproductcategory($categoryid,$subproductid)
	{
		$this->db->select('*');
		$this->db->from('SubProduct sp, Product p');
		$this->db->where('sp.ProductID = p.ProductID');
		$this->db->where('p.CategoryID',$categoryid);
		$this->db->where('sp.SubProductID !=',$subproductid);
		$this->db->order_by('rand()');
		$this->db->limit(4);
		
		return $this->db->get()->result_array();
	}
	
	public function getcartlist($customercookie,$customerid)
	{
		$this->db->select('*');
		$this->db->from('Cart');
		$this->db->where('Cookie',$customercookie);
		$this->db->or_where('CustomerID',$customerid);
		return $this->db->get()->result_array();
	}
	
	public function getbanklist()
	{
		$this->db->select('*');
		$this->db->from('bankdata');
		return $this->db->get()->result_array();
	}
	
	public function getarea($postalcode)
	{
		$this->db->select('*');
		$this->db->from('PostalCodeMaster');
		$this->db->where('Kodepos',$postalcode);
		return $this->db->get()->result_array();
	}
	
	public function getcheckouttemp($customerid)
	{
		$this->db->select('*');
		$this->db->from('checkouttemp');
		$this->db->where('CustomerID',$customerid);
		return $this->db->get()->result_array();
	}
	
	public function getinvoiceheader($invoiceid)
	{
		$this->db->select('*');
		$this->db->from('InvoiceHeader');
		$this->db->where('InvoiceID',$invoiceid);
		return $this->db->get()->result_array();
	}
	
	public function getinvoicedetail($invoiceid)
	{
		$this->db->select('*');
		$this->db->from('InvoiceDetail');
		$this->db->where('InvoiceID',$invoiceid);
		return $this->db->get()->result_array();
	}
	
	public function getbank($paymentdestination)
	{
		$this->db->select('*');
		$this->db->from('BankData');
		$this->db->where('BankName',$paymentdestination);
		$this->db->limit(1);
		return $this->db->get()->result_array();
	}
	
	public function getmemberunpaidheader($customerid)
	{
		$this->db->select('*');
		$this->db->from('InvoiceHeader');
		$this->db->where('CustomerID',$customerid);
		$this->db->where('PaymentStatus','0');
		return $this->db->get()->result_array();
	}
	
	public function getcustomerinvoiceheader($customerid)
	{
		$this->db->select('*');
		$this->db->from('InvoiceHeader');
		$this->db->where('CustomerID',$customerid);
		$this->db->order_by("InvoiceTime", "desc");
		return $this->db->get()->result_array();
	}
	
	public function getsubscriptioncheck($email)
	{
		$this->db->select('*');
		$this->db->from('Subscription');
		$this->db->where('Email',$email);
		return $this->db->get()->result_array();
	}
	
	public function getfreedelivery()
	{
		$this->db->select('*');
		$this->db->from('Promotion');
		$this->db->where('Type','Free Ongkir');
		$this->db->where('AvailableFrom <=', 'now()', FALSE);
		$this->db->where('AvailableTo >=', 'now()', FALSE);
		return $this->db->get()->result_array();
	}
	
	public function getvoucherpromotion($vouchercode)
	{
		$this->db->select('*');
		$this->db->from('Promotion');
		$this->db->where('Type','Voucher');
		$this->db->where('AvailableFrom <=', 'now()', FALSE);
		$this->db->where('AvailableTo >=', 'now()', FALSE);
		
		if ($vouchercode!="")
		{
			$this->db->where('VoucherCode',$vouchercode);
		}
		
		return $this->db->get()->result_array();
	}
	
	public function getcareerlist($careerid)
	{
		$this->db->select('*');
		$this->db->from('Career');
		if ($getcareerlist!="")
		{
			$this->db->where('CareerID',$careerid);
		}
		$this->db->order_by("CareerID", "asc");
		return $this->db->get()->result_array();
	}
}