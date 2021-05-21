<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DatabaseController;

class InformationController extends Controller
{
	public function baseInformation(){

		$db = new DatabaseController;

		$conn = $db->OpenCon("mova");

		$query = "SELECT COUNT(id) as count FROM loan WHERE gender = \"male\"";

		$resp = $conn->query($query);

		$col = array("count");

		$genderData = $db->RespIntoVar($resp, $col);

		$genderCount["male"] = intval($genderData["count"]);

		$genderCount["female"] = 500-$genderCount["male"];

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"High School or Below\"";

		$resp = $conn->query($query);

		$educationData = $db->RespIntoVar($resp, $col);

		$educationCount["HighSchoolOrBelow"] = intval($educationData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"college\"";

		$resp = $conn->query($query);

		$educationData = $db->RespIntoVar($resp, $col);

		$educationCount["College"] = intval($educationData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Bechalor\"";

		$resp = $conn->query($query);

		$educationData = $db->RespIntoVar($resp, $col);

		$educationCount["Bachelor"] = intval($educationData["count"]);

		$educationCount["MasterOrAbove"] = 500 - $educationCount["Bachelor"] - $educationCount["College"] - $educationCount["HighSchoolOrBelow"];

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"18\" AND age <= \"19\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["18-19"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"20\" AND age <= \"24\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["20-24"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["25-29"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["30-34"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["35-39"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"40\" AND age <= \"44\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["40-44"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"45\" AND age <= \"49\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["45-49"] = intval($ageData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"50\"";

		$resp = $conn->query($query);

		$ageData = $db->RespIntoVar($resp, $col);

		$ageCount["50AndAbove"] = intval($ageData["count"]);

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		/*$query = "SELECT COUNT(id) as count FROM loan WHERE terms = \"7\"";

		$resp = $conn->query($query);

		$termsData = $db->RespIntoVar($resp, $col);

		$termsCount["7days"] = intval($termsData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE terms = \"15\"";

		$resp = $conn->query($query);

		$termsData = $db->RespIntoVar($resp, $col);

		$termsCount["15days"] = intval($termsData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE terms = \"30\"";

		$resp = $conn->query($query);

		$termsData = $db->RespIntoVar($resp, $col);

		$termsCount["30days"] = intval($termsData["count"]);*/

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData = $db->RespIntoVar($resp, $col);

		$statusCount["paidoff"] = intval($statusData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData = $db->RespIntoVar($resp, $col);

		$statusCount["collectionPaidoff"] = intval($statusData["count"]);

		$query = "SELECT COUNT(id) as count FROM loan WHERE loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData = $db->RespIntoVar($resp, $col);

		$statusCount["collection"] = intval($statusData["count"]);

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$db->CloseCon($conn);

		return view('base', compact('ageCount','educationCount','genderCount','statusCount'));

	}



	public function ageEducationInformation(){

		$db = new DatabaseController;

		$conn = $db->OpenCon("mova");

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND education = \"college\"";

		$resp = $conn->query($query);

		$col = array("count");

		$educationData["25-29"]["college"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND education = \"High School or Below\"";

		$resp = $conn->query($query);

		$educationData["25-29"]["HighSchoolOrBelow"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND education = \"Bechalor\"";

		$resp = $conn->query($query);

		$educationData["25-29"]["Bechalor"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND education = \"Master or Above\"";

		$resp = $conn->query($query);

		$educationData["25-29"]["MasterOrAbove"] = $db->RespIntoVar($resp, $col);
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND education = \"college\"";

		$resp = $conn->query($query);

		$educationData["30-34"]["college"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND education = \"High School or Below\"";

		$resp = $conn->query($query);

		$educationData["30-34"]["HighSchoolOrBelow"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND education = \"Bechalor\"";

		$resp = $conn->query($query);

		$educationData["30-34"]["Bechalor"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND education = \"Master or Above\"";

		$resp = $conn->query($query);

		$educationData["30-34"]["MasterOrAbove"] = $db->RespIntoVar($resp, $col);

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND education = \"college\"";

		$resp = $conn->query($query);

		$educationData["35-39"]["college"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND education = \"High School or Below\"";

		$resp = $conn->query($query);

		$educationData["35-39"]["HighSchoolOrBelow"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND education = \"Bechalor\"";

		$resp = $conn->query($query);

		$educationData["35-39"]["Bechalor"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND education = \"Master or Above\"";

		$resp = $conn->query($query);

		$educationData["35-39"]["MasterOrAbove"] = $db->RespIntoVar($resp, $col);

		$db->CloseCon($conn);

		return view('ageAnalisis', compact('educationData'));
	}



	public function ageStatusInformation(){

		$db = new DatabaseController;

		$conn = $db->OpenCon("mova");

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["25-29"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["25-29"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"25\" AND age <= \"29\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["25-29"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["30-34"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["30-34"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"30\" AND age <= \"34\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["30-34"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["35-39"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["35-39"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE age >= \"35\" AND age <= \"39\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["35-39"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		$db->CloseCon($conn);

		return view('ageStatusAnalisis', compact('statusData'));
	}



	public function educationStatusInformation(){

		$db = new DatabaseController;

		$conn = $db->OpenCon("mova");

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"High School or Below\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["HighSchoolOrBelow"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"High School or Below\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["HighSchoolOrBelow"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"High School or Below\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["HighSchoolOrBelow"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"college\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["college"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"college\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["college"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"college\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["college"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Bechalor\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["bechalor"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Bechalor\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["bechalor"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Bechalor\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["bechalor"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Master or Above\" AND loan_status = \"PAIDOFF\"";

		$resp = $conn->query($query);

		$col = array("count");

		$statusData["masterOrAbove"]["paidoff"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Master or Above\" AND loan_status = \"COLLECTION\"";

		$resp = $conn->query($query);

		$statusData["masterOrAbove"]["collection"] = $db->RespIntoVar($resp, $col);

		$query = "SELECT COUNT(id) as count FROM loan WHERE education = \"Master or Above\" AND loan_status = \"COLLECTION_PAIDOFF\"";

		$resp = $conn->query($query);

		$statusData["masterOrAbove"]["collectionPaidoff"] = $db->RespIntoVar($resp, $col);

		$db->CloseCon($conn);

		return view('educationStatusAnalisis', compact('statusData'));
	}
}
