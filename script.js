const d4 = ["4_1.png",
"4_2.png",
"4_3.png",
"4_4.png"];

const d6 = ["6_1.png",
"6_2.png",
"6_3.png",
"6_4.png",
"6_5.png",
"6_6.png"];

const d8 = ["8_1.png",
"8_2.png",
"8_3.png",
"8_4.png",
"8_5.png",
"8_6.png",
"8_7.png",
"8_8.png"];

const d10 = ["10_1.png",
"10_2.png",
"10_3.png",
"10_4.png",
"10_5.png",
"10_6.png",
"10_7.png",
"10_8.png",
"10_9.png",
"10_10.png"];

const d12 = ["12_1.png",
"12_2.png",
"12_3.png",
"12_4.png",
"12_5.png",
"12_6.png",
"12_7.png",
"12_8.png",
"12_9.png",
"12_10.png",
"12_10.png",
"12_11.png",
"12_12.png"];

const d20 = ["20_1.png",
"20_2.png",
"20_3.png",
"20_4.png",
"20_4.png",
"20_5.png",
"20_6.png",
"20_7.png",
"20_8.png",
"20_9.png",
"20_10.png",
"20_11.png",
"20_12.png",
"20_13.png",
"20_14.png",
"20_15.png",
"20_16.png",
"20_17.png",
"20_18.png",
"20_19.png",
"20_20.png"];

const d100 = ["10_1.png",
"10_2.png",
"10_3.png",
"10_4.png",
"10_5.png",
"10_6.png",
"10_7.png",
"10_8.png",
"10_9.png",
"10_10.png",
"100_11.png",
"100_12.png",
"100_13.png",
"100_14.png",
"100_15.png",
"100_16.png",
"100_17.png",
"100_18.png",
"100_19.png",
"100_20.png",
"100_21.png",
"100_22.png",
"100_23.png",
"100_24.png",
"100_25.png",
"100_26.png",
"100_27.png",
"100_28.png",
"100_29.png",
"100_30.png",
"100_31.png",
"100_32.png",
"100_33.png",
"100_34.png",
"100_35.png",
"100_36.png",
"100_37.png",
"100_38.png",
"100_39.png",
"100_40.png",
"100_41.png",
"100_42.png",
"100_43.png",
"100_44.png",
"100_45.png",
"100_46.png",
"100_47.png",
"100_48.png",
"100_49.png",
"100_50.png",
"100_51.png",
"100_52.png",
"100_53.png",
"100_54.png",
"100_55.png",
"100_56.png",
"100_57.png",
"100_58.png",
"100_59.png",
"100_60.png",
"100_61.png",
"100_62.png",
"100_63.png",
"100_64.png",
"100_65.png",
"100_66.png",
"100_67.png",
"100_68.png",
"100_69.png",
"100_70.png",
"100_71.png",
"100_72.png",
"100_73.png",
"100_74.png",
"100_75.png",
"100_76.png",
"100_77.png",
"100_78.png",
"100_79.png",
"100_80.png",
"100_81.png",
"100_82.png",
"100_83.png",
"100_84.png",
"100_85.png",
"100_86.png",
"100_87.png",
"100_88.png",
"100_89.png",
"100_90.png",
"100_91.png",
"100_92.png",
"100_93.png",
"100-94.png",
"100_95.png",
"100_96.png",
"100_97.png",
"100_98.png",
"100_99.png",
"100_100.png"];

function roll4() {
  let die = document.getElementById("d4");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*4);
    document.getElementById("d4").setAttribute("src", d4[value]);
  },
  1000  
  );
}

function roll6() {
  let die = document.getElementById("d6");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*6);
    document.getElementById("d6").setAttribute("src", d6[value]);
  },
  1000  
  );
}
function roll8() {
  let die = document.getElementById("d8");
  die.classList.add("shake");
  
  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*8);
    document.getElementById("d8").setAttribute("src", d8[value]);
  },
  1000  
  );
}
  function roll10() {
  let die = document.getElementById("d10");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*10);
    document.getElementById("d10").setAttribute("src", d10[value]);
  },
  1000  
  );
}
  function roll12() {
  let die = document.getElementById("d12");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*12);
    document.getElementById("d12").setAttribute("src", d12[value]);
  },
  1000  
  );
}
  function roll20() {
  let die = document.getElementById("d20");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*20);
    document.getElementById("d20").setAttribute("src", d20[value]);
  },
  1000  
  );
}
  function roll100() {
  let die = document.getElementById("d100");
  die.classList.add("shake");

  setTimeout(function() {
    die.classList.remove("shake");
    let value = Math.floor(Math.random()*100);
    document.getElementById("d100").setAttribute("src", d100[value]);
  },
  1000  
  );
}