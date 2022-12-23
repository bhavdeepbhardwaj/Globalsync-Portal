var full_name = $full_name;
var slip_month = strtoupper(date_format($payslip_date, "M Y"));
var cal_day = $cal_days;
var pay_days = $pay_days;
var inc = $inc;
var others = $others;
var arrears = $arrears;
var tds = $tds;
var adv = $adv;
var penalties = $penalties;
var msa_check = $msa_check;
var tsa_check = $tsa_check;
var refl_bonus = $ref_bonus;
var qua_inc = $qua_incentive;
var ins_inc = $inc_install;
var sandwch = $sandwich;

var gross_sal = 0;
var basic_calc = 0;
var final_basic = 0;
var final_hra = 0;
var final_stack = 0;
var hra = 0;
var hra_calc = 0;
var final_food_allw = 0;
var final_travel_allw = 0;
var msa = 0;
var tsa = 0;
var nother = 0;
var final_inc = 0;

var gross_sal = $gross;
var stack_inc = $stack;
var food_allw = $food_allw;
var travel_allw = $travel_allw;
var spl_allowance = $spl_allowance;

var ratio = parseFloat(pay_days) / parseFloat(cal_day);

if (gross_sal == 0 || gross_sal == null) {
  final_basic = 0;
  $(".basic").text(addCommas(final_basic));
} else {
  basic_calc = gross_sal * 0.4;
  basic_calc <= 12000 ? final_basic = 12000 * ratio : final_basic = basic_calc * ratio;
  $(".basic").text(addCommas(final_basic));
}

hra_calc = final_basic * 1.5;
if (hra_calc < (gross_sal * ratio)) {
  final_hra = final_basic * 0.5;
  $(".hra").text(addCommas(final_hra));
} else {
  final_hra = (gross_sal * ratio) - final_basic;
  $(".hra").text(addCommas(final_hra));
}

var sa_calculation = (gross_sal * ratio) - final_basic - final_hra;

if (sa_calculation > final_hra) {
  var sa_calc = final_basic * 0.5;
  $(".sa").text(addCommas(sa_calc));

} else {
  var sa_calc = sa_calculation;
  $(".sa").text(addCommas(sa_calc));
}

var oa_calc = (gross_sal * ratio) - final_basic - final_hra - sa_calc;
$(".oa").text(addCommas(oa_calc));

var final_gross = final_basic + final_hra + sa_calc + oa_calc;
$(".gs").text(addCommas(final_gross));

if (food_allw == null || food_allw == "" || food_allw == 0) {
  $(".fa").text(addCommas(final_food_allw));
} else {
  $(".food_allow").show();
  final_food_allw = parseFloat(food_allw) * ratio;
  $(".fa").text(addCommas(final_food_allw));
}

if (travel_allw == null || travel_allw == "" || travel_allw == 0) {
  $(".ta").text(addCommas(final_travel_allw));
} else {
  $(".travel_allow").show();
  final_travel_allw = parseFloat(travel_allw) * ratio;
  $(".ta").text(addCommas(final_travel_allw));
}

if (stack_inc == null || stack_inc == "" || stack_inc == 0) {
  $(".stack_tr").hide();
  $(".con_tr").hide();
} else {
  final_stack = parseFloat(stack_inc);
  $(".si").text(addCommas(final_stack));
}

if (refl_bonus == null || refl_bonus == "" || refl_bonus == 0) {
  $(".refinc_tr").hide();
} else {
  $(".ref_inc").text(addCommas(parseFloat(refl_bonus)));
}

final_inc = parseFloat(inc) + parseFloat(qua_inc) + parseFloat(ins_inc);
if (final_inc == null || final_inc == "" || final_inc == 0) {
  $(".inc_tr").hide();
} else {
  $(".inc").text(addCommas(parseFloat(final_inc)));
}

if (others == null || others == "" || others == 0) {
  $(".others_tr").hide();
  $(".nothers_tr").hide();
} else if (others > 0) {
  $(".other").text(addCommas(parseFloat(others)));
  $(".nothers_tr").hide();
} else {
  rw_other = others.replace(/-/g, "");
  nother = parseFloat(rw_other);
  $(".nothers").text(addCommas(parseFloat(nother)));
  $(".others_tr").hide();
}

if (arrears == null || arrears == "" || arrears == 0) {
  $(".arrears_tr").hide();
} else {
  $(".arrear").text(addCommas(parseFloat(arrears)));
}

if (spl_allowance == null || spl_allowance == "" || spl_allowance == 0) {
  $(".spl_tr").hide();
} else {
  $(".spl_allw").text(addCommas(parseFloat(spl_allowance)));
}

if (tds == null || tds == "" || tds == 0) {
  $(".tds_tr").hide();
} else {
  $(".tds").text(addCommas(parseFloat(tds)));
}

if (adv == null || adv == "" || adv == 0) {
  $(".adv_trr").hide();
} else {
  $(".adv_data").text(addCommas(parseFloat(adv)));
}

if (penalties == null || penalties == "" || penalties == 0) {
  $(".penalties_tr").hide();
} else {
  $(".penalty").text(addCommas(parseFloat(penalties)));
}

if (sandwch == null || sandwch == "" || sandwch == 0) {
  $(".sandwich_tr").hide();
} else {
  $(".sandwich").text(addCommas(parseFloat(sandwch)));
}

if (ratio == 1) {
  var pf_calc = (gross_sal * ratio) - final_hra;
  if (pf_calc >= 15000) {
    var final_pf_employer = (15000 * 0.13) * ratio;
    var final_pf_employee = (15000 * 0.12) * ratio;
  } else {
    var final_pf_employer = (pf_calc * 0.13) * ratio;
    var final_pf_employee = (pf_calc * 0.12) * ratio;
  }
} else if (((ratio < 1) && ((gross_sal * ratio) < 15000)) || ((ratio < 1) && ((gross_sal * ratio) >= 15000))) {
  var pf_calc = (gross_sal * ratio) - final_hra;
  if (pf_calc >= 15000) {
    var final_pf_employer = 15000 * 0.13;
    var final_pf_employee = 15000 * 0.12;
  } else {
    var final_pf_employer = pf_calc * 0.13;
    var final_pf_employee = pf_calc * 0.12;
  }
} else {
  var pf_calc = gross_sal - (final_hra * 2);
  if (pf_calc >= 15000) {
    var final_pf_employer = (15000 * 0.13) * ratio;
    var final_pf_employee = (15000 * 0.12) * ratio;
  } else {
    pf_calc = final_basic;
    var final_pf_employer = pf_calc * 0.13;
    var final_pf_employee = pf_calc * 0.12;
  }
}

// var pf_calc = gross_sal - final_hra;
// if(pf_calc >= 15000) {
//     var final_pf_employer = (15000 * 0.13) * ratio;
//     var final_pf_employee = (15000 * 0.12) * ratio;
// } else {
//     var final_pf_employer = (pf_calc * 0.13) * ratio;
//     var final_pf_employee = (pf_calc * 0.12) * ratio;
// }

$(".pfempr").text(addCommas(final_pf_employer));
$(".pfemp").text(addCommas(final_pf_employee));

if (gross_sal >= 21000) {
  var final_esi_employer = 0;
  var final_esi_employee = 0;
} else {
  var final_esi_employer = final_gross * 0.0325;
  var final_esi_employee = final_gross * 0.0075;
}

$(".esiempr").text(addCommas(final_esi_employer));
$(".esiemp").text(addCommas(final_esi_employee));

msa_check == 1 ? msa = final_food_allw : msa = 0;
$(".meal").text(addCommas(parseFloat(msa)));

tsa_check == 1 ? tsa = final_travel_allw : tsa = 0;
$(".travel").text(addCommas(parseFloat(tsa)));

var ctc_calc = final_gross + final_stack + final_pf_employer + final_esi_employer + final_food_allw + final_travel_allw + parseFloat(others) + parseFloat(arrears) + parseFloat(spl_allowance) + parseFloat(refl_bonus) + final_inc;
$(".tot_earn").text(addCommas(ctc_calc));

var total_deduction = final_pf_employer + final_pf_employee + final_esi_employer + final_esi_employee + parseFloat(tds) + parseFloat(adv) + parseFloat(penalties) + parseFloat(msa) + parseFloat(tsa) + parseFloat(nother) + parseFloat(sandwch);
$(".tolduc").text(addCommas(total_deduction));

var net = ctc_calc.toFixed(2) - total_deduction.toFixed(2);
$(".net_pay").text(addCommas(net));
net = net.toFixed(2);

var splittedNum = net.toString().split('.');
var nonDecimal = splittedNum[0];
var decimal = splittedNum[1];
if (decimal == 00 || decimal == null || decimal == "") {
  var value = price_in_words(Number(nonDecimal));
} else {
  var value = price_in_words(Number(nonDecimal)) + " and " + price_in_words(Number(decimal)) + " paise";
}

$(".pay_word").text(value + " Only");

final_basic = hra = final_hra = final_stack = gross_sal = food_allw = final_food_allw = travel_allw = final_travel_allw = stack_inc = basic_calc = hra_calc = sa_calc = oa_calc = final_gross = total_earnings = final_pf_employer = final_pf_employee = final_esi_employer = final_esi_employee = total_deduction = in_hand = ctc_calc = 0;

annual_final_basic = annual_final_stack = annual_gross_sal = annual_stack_inc = annual_food_allw = annual_travel_allw = annual_basic_calc = annual_hra_calc = annual_sa_calc = annual_oa_calc = annual_final_gross = annual_total_earnings = annual_final_pf_employer = annual_final_pf_employee = annual_final_esi_employer = annual_final_esi_employee = annual_total_deduction = annual_in_hand = annual_ctc_calc = 0;

function addCommas(nStr) {
  var inr_amt = nStr.toLocaleString('en-IN', {
    maximumFractionDigits: 2,
    style: 'currency',
    currency: 'INR'
  });
  return inr_amt;
}

function price_in_words(price) {
  var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
    dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
    tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
    handle_tens = function (dgt, prevDgt) {
      return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
    },
    handle_utlc = function (dgt, nxtDgt, denom) {
      return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
    };

  var str = "",
    digitIdx = 0,
    digit = 0,
    nxtDigit = 0,
    words = [];
  if (price += "", isNaN(parseInt(price))) str = "";
  else if (parseInt(price) > 0 && price.length <= 10) {
    for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
      case 0:
        words.push(handle_utlc(digit, nxtDigit, ""));
        break;
      case 1:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 2:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
        break;
      case 3:
        words.push(handle_utlc(digit, nxtDigit, "Thousand"));
        break;
      case 4:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 5:
        words.push(handle_utlc(digit, nxtDigit, "Lakh"));
        break;
      case 6:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 7:
        words.push(handle_utlc(digit, nxtDigit, "Crore"));
        break;
      case 8:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 9:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
    }
    str = words.reverse().join("")
  } else str = "";
  return str

}

var doc_name = full_name + "_" + slip_month + "_Salary_Slip.pdf";

function generatePDF() {
  // Choose the element that our invoice is rendered in.
  const element = document.getElementById('convertPDF');
  // Choose the element and save the PDF for our user.
  html2pdf().set({
    html2canvas: {
      scale: 4
    }
  }).from(element).save(doc_name);
}