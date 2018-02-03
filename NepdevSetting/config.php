<?php 

 class NepdevGuitar{
	 public $Server = "localhost";
	 public $User = "root";
	 public $Pass = "";
	 public $Dbname = "nepdevguitar";
	 public $NepdevConnect;
	 
	 public function __construct()
	 {
		 $this->NepdevConnect = new mysqli($this->Server,$this->User,$this->Pass,$this->Dbname);
		 if($this->NepdevConnect->connect_error)
		 {
			 die("Error Connection Database");
		 }
	 }
	 ////////\\\\\\\\\\\\\ Check Admin Login ////////////\\\\\\\\\\\\\\\
	 public function NepdevAdminCheck($NepdevUsername,$NepdevPassword)
	 {
		 $NepDevAdminSel = "SELECT * FROM Admin where username='$NepdevUsername' AND password='$NepdevPassword'";
		 $NepdevAdminRun = $this->NepdevConnect->query($NepDevAdminSel);
		 $NepdevAdminCount = $NepdevAdminRun->num_rows;
		 return $NepdevAdminCount;
	 }
	  ////////\\\\\\\\\\\\\ End Check Admin Login ////////////\\\\\\\\\\\\\\\
	 
	  ////////\\\\\\\\\\\\\ Add Brands ////////////\\\\\\\\\\\\\\\
	  public function NepdevAddBrand($brandname)
	  {
		  $NepdevBrandSel = "Select * from brand where BrandName='$brandname'";
		  $NepdevBrandSelRun =  $this->NepdevConnect->query($NepdevBrandSel);
		  $NepdevAdminBrandCount = $NepdevBrandSelRun->num_rows;
		  if($NepdevAdminBrandCount<1)
		  {
		  $NepdevAdminAddBrand = "INSERT INTO brand(BrandName) values('$brandname')";
		  $NepdevAdminAddBrandRun =  $this->NepdevConnect->query($NepdevAdminAddBrand);
			  return $NepdevAdminAddBrandRun;
		  }
		  else
		  {
			  echo "<script>alert('You Have Already Add This Brand $brandname');</script>";
		  }
		  
	  }
	 ////////\\\\\\\\\\\\\End Add Brands ////////////\\\\\\\\\\\\\\\
	 
	 /////////////\\\\\\\\\\\\Display Brand ///////////////\\\\\\\\\\\\\
	 public function NepdevDisplayBrand()
	 {
		 $NepdevDisplayBrands = "SELECT * FROM brand";
		 $NepdevDisplayBrandRun = $this->NepdevConnect->query($NepdevDisplayBrands);
		 return $NepdevDisplayBrandRun;
	 }
	 /////////////\\\\\\\\\\\\End Display Brand ///////////////\\\\\\\\\\\\\
	 
	 ////////////\\\\\\\\\\\\\\\\\\\ Add Category /////////////\\\\\\\\\\\\\\\\\\\\\\\\\
	public function NepdevAddCat($NewCatName)
	{
		 $NepdevAdminSelCat = "SELECT * FROM category where GuitarCategory='$NewCatName'";
	 $NepdevAdminSelCatRun = $this->NepdevConnect->query($NepdevAdminSelCat);
	 $NepdevCountCat = $NepdevAdminSelCatRun->num_rows;
		if($NepdevCountCat<1)
		{
			$NepDevInsertCat = "INSERT INTO category(GuitarCategory) values('$NewCatName')";
			$NepdevInsCatRun = $this->NepdevConnect->query($NepDevInsertCat);
			
			return $NepdevInsCatRun;
		}
		else
		{
			echo "<script>alert('You Have Already Added');</script>";
		}
		
	}
	  ////////////\\\\\\\\\\\\\\\\\\\End Add Category /////////////\\\\\\\\\\\\\\\\\\\\\\\\\
	 
	 ////////////////\\\\\\\\\\\\\\Display Category /////////////////////\\\\\\\\\\\\\\\\\\\\
      public function NepdevDisCat()
	  {
		  	 $NepdevSelCat = "SELECT * FROM category";
	 $NepdevSelCatRun = $this->NepdevConnect->query($NepdevSelCat);
	 return $NepdevSelCatRun;
	  }
 	 ////////////////\\\\\\\\\\\\\\Display Category /////////////////////\\\\\\\\\\\\\\\\\\\\
	 
	 //////////////\\\\\\\\\\\\\\\\\\ ADD GUITAR ////////////////////////////\\\\\\\\\\\\\\\\\\\\\\
	 public function NepdevAddGuitar($GuitarName,$GuitarPrice,$GuitarOverview,$GuitarCategory,$GuitarBrand,$ProductImage)
	 {
		 $NepdevAddGuitarIns = "INSERT INTO add_guitar(GuitarName,GuitarPrice,GuitarOverview,GuitarCategory,GuitarBrand,ProductImage) values('$GuitarName','$GuitarPrice','$GuitarOverview','$GuitarCategory','$GuitarBrand','$ProductImage')";
		 $NepdevAddGuitarRun = $this->NepdevConnect->query($NepdevAddGuitarIns);
		 return $NepdevAddGuitarRun;
		 
	 }
	 //////////////\\\\\\\\\\\\\\\\\\ END ADD GUITAR ////////////////////////////\\\\\\\\\\\\\\\\\\\\\\
	 
	 ////////// view guitar brand categegory or all products ////////\\\\\\\\\\\\
	 public function NepdevMyGuitarBrand()
	 {
		 $NepdevMyGuitarSel = "SELECT * FROM brand";
		 $NepdevMyGuitarSelRun = $this->NepdevConnect->query($NepdevMyGuitarSel);
		 return $NepdevMyGuitarSelRun;
	 }
	 public function NepdevMyGuitarCat()
	 {
		 $NepdevMyGuitarCatSel = "SELECT * FROM category";
		 $NepdevMyGuitarCatSelRun = $this->NepdevConnect->query($NepdevMyGuitarCatSel);
		 return $NepdevMyGuitarCatSelRun;
	 }
	 public function NepdevGuitarInfo()
	 {
		 $NepdevGuitarSelAll = "SELECT * FROM add_guitar";
		 $NepdevGuitarSelAllRun = $this->NepdevConnect->query($NepdevGuitarSelAll);
		 return $NepdevGuitarSelAllRun;
	 }
	 
	 public function NepdevSingleProduct($productid)
	 {
		 $NepdevSingleProductSel = "SELECT * FROM add_guitar where id='$productid'";
		 $NepdevSingleProductSelRun = $this->NepdevConnect->query($NepdevSingleProductSel);
		 return $NepdevSingleProductSelRun;
	 }
	 public function NepdevProductImgSlider()
	 {
		 $NepdevProductImgSel = "SELECT id,ProductImage FROM add_guitar LIMIT 0,9";
		 $NepdevProductImgSelRun = $this->NepdevConnect->query($NepdevProductImgSel);
		 return $NepdevProductImgSelRun;
	 }
	 
	 public function NepdevSingleProductUpdate($NepdevUpGuitarName,$NepdevUpGuitarPrice,$NepdevUpGuitarOverview,$NepdevUpCategory,$NepdevUpBrand,$NepdevUpNewImg,$productid)
	 {
		$NepdevSingleProductUp = "UPDATE add_guitar SET GuitarName='$NepdevUpGuitarName',GuitarPrice='$NepdevUpGuitarPrice',GuitarOverview='$NepdevUpGuitarOverview',GuitarCategory='$NepdevUpCategory',GuitarBrand='$NepdevUpBrand',ProductImage='$NepdevUpNewImg' where id='$productid'";	 
		 $NepdevSingleProductUpRun = $this->NepdevConnect->query($NepdevSingleProductUp);
		 return $NepdevSingleProductUpRun;
		 
	 }
	 public function NepdevRemoveProduct($productid)
	 {
		 $NepdevDelProduct = "DELETE FROM add_guitar where id='$productid'";
		 $NepdevDelProductRun = $this->NepdevConnect->query($NepdevDelProduct);
		 return $NepdevDelProductRun;
	 }
	 
	 public function NepdevViewProductAsBrand($BrandName)
	 {
		 $NepdevViewProductBrandSel = "SELECT * FROM add_guitar where GuitarBrand='$BrandName'";
		 $NepdevViewProductBrandSelRun = $this->NepdevConnect->query($NepdevViewProductBrandSel);
		 return $NepdevViewProductBrandSelRun;
	 }
	 public function NepdevViewProductAsCat($SelectGuitarCategory)
	 {
		 $NepdevViewProductAsCatSel = "SELECT * FROM add_guitar where GuitarCategory='$SelectGuitarCategory'";
		 $NepdevViewProductAsCatSelRun = $this->NepdevConnect->query($NepdevViewProductAsCatSel);
		 return $NepdevViewProductAsCatSelRun;
	 }

 }

$NepdevG = new NepdevGuitar;



