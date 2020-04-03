<?php

/*
names of the variables passed in the form are:
1.  GPA:
        name is "gpa" type is "number" and value is "a decimal number between 1 and 4, 2 decimals of precision"

2.   What major:
        name is "major"
                    value is "ALLM" for All Majors
                    value is "ACAD" for Academic Development
                    value is "ACTG" for Accounting
                    value is "ABF" for Acct,Business Law and Finance
                    value is "AFAM" for African &amp; African Amer Studies
                    value is "ANTH" for Anthropology
                    value is "ARAB" for Arabic
                    value is "ARAM" for Aramaic
                    value is "ART" for Art
                    value is "ARTH" for Art History
                    value is "BLBC" for Bilingual/Bicultural Education
                    value is "BIO" for Biology
                    value is "BIOS" for Biology Education
                    value is "BLAW" for Business Law
                    value is "CHEM" for Chemistry
                    value is "CAST" for Child Advocacy Studies
                    value is "CHIN" for Chinese
                    value is "COBM" for Coll of Business &amp; Management
                    value is "CMTC" for Comm, Media &amp; Theatre-Comm
                    value is "CMTE" for Comm, Media &amp; Theatre-Educ
                    value is "CMTM" for Comm, Media &amp; Theatre-Media
                    value is "CMTT" for Comm, Media &amp; Theatre-Theatre
                    value is "CS" for Computer Science
                    value is "COUN" for Counselor Education
                    value is "DANC" for Dance
                    value is "ECED" for Early Childhood Education
                    value is "ESCI" for Earth Science
                    value is "ECON" for Economics
                    value is "EDFN" for Educational Foundations
                    value is "ELED" for Elementary Education
                    value is "ENGL" for English
                    value is "ELP" for English Language Program
                    value is "ESL" for English Second Language
                    value is "ENVI" for Environmental Science
                    value is "EXSC" for Exercise Science
                    value is "FINA" for Finance
                    value is "FREN" for French
                    value is "GES" for Geography and Envir Studies
                    value is "GIFT" for Gifted Education
                    value is "GS" for Global Studies
                    value is "HLED" for Health Education
                    value is "HIST" for History
                    value is "ZHON" for Honors Program
                    value is "ZAHS" for Honors: Art History
                    value is "ZACT" for Honors:Accounting
                    value is "ZBIO" for Honors:Biology
                    value is "ZENG" for Honors:English
                    value is "ZHIS" for Honors:History
                    value is "ZMGT" for Honors:Management
                    value is "ZMKG" for Honors:Marketing
                    value is "ZMAT" for Honors:Mathematics
                    value is "ZMDI" for Honors:Media
                    value is "ZPHI" for Honors:Philosophy
                    value is "ZSWK" for Honors:Social Work
                    value is "ZSPE" for Honors:Special Education
                    value is "HRD" for Human Resource Development
                    value is "ICSE" for Inner City Studies
                    value is "ITAL" for Italian
                    value is "JPN" for Japanese
                    value is "JUST" for Justice Studies
                    value is "KOR" for Korean
                    value is "LLAS" for Latino and Latin Amer Studies
                    value is "LEAD" for Leadership
                    value is "LING" for Linguistics
                    value is "LTCY" for Literacy Education
                    value is "MNGT" for Management
                    value is "MKTG" for Marketing
                    value is "MATH" for Mathematics
                    value is "MLED" for Middle Schl Educ &amp; Tchng
                    value is "MILS" for Military Science
                    value is "MUS" for Music
                    value is "NEIU" for NEIU-Interdisciplinary
                    value is "NDP" for Nontraditional Degree Programs
                    value is "PHIL" for Philosophy
                    value is "PEMA" for Phys Education Activity
                    value is "PEMT" for Phys Education Theory
                    value is "PHYS" for Physics
                    value is "POL" for Polish
                    value is "PSCI" for Political Science
                    value is "PSYC" for Psychology
                    value is "READ" for Reading
                    value is "SCED" for Secondary Education
                    value is "SWK" for Social Work
                    value is "SOC" for Sociology
                    value is "SPAN" for Spanish
                    value is "SPED" for Special Education
                    value is "TESL" for Tchng Engl Second Lang
                    value is "WGS" for Women's and Gender Studies
                    value is "WLC" for World Languages &amp; Cultures

3.  type of student:
        name="hmyears"
                    value is "na" (2 letters) for Any
                    value is "u1" (2 letters) for freshman
                    value is "u2" (2 letters) for sophmore
                    value is "u3" (2 letters) for junior
                    value is "u4" (2 letters) for senior
                    value is "g1" (2 letters) for Graduate Student (Ms)
                    value is "g2" (2 letters) for Graduate Student (PhD)

4.  Gender:
        name is "gender" type is "radio" and value is "m" (1 letter) for Male
        name is "gender" type is "radio" and value is "f" (1 letter) for Female
        name is "gender" type is "radio" and value is "o" (1 letter) for I prefer not say

5.  Enthnic group (optional)
        name is "ethnic" type is "checkbox" and value is "afri" (4 letters) for African American
        name is "ethnic" type is "checkbox" and value is "hisp" (4 letters) for Hispanic
        name is "ethnic" type is "checkbox" and value is "asia" (4 letters) for Asian/Pacific Islander
        name is "ethnic" type is "checkbox" and value is "nati" (4 letters) for Native American
        name is "ethnic" type is "checkbox" and value is "alas" (4 letters) for Alaska Native
        name is "ethnic" type is "checkbox" and value is "cauc" (4 letters) for Caucasian
        name is "ethnic" type is "checkbox" and value is "othe" (4 letters) for Other Ethnic/Racial Heritage
</div>

*/


$currMajors = array(
        "ALLM" => "All Majors",
        "ACAD" => "Academic Development",
        "ACTG" => "Accounting",
        "ABF" => "Acct,Business Law and Finance",
        "AFAM" => "African &amp; African Amer Studies",
        "ANTH" => "Anthropology",
        "ARAB" => "Arabic",
        "ARAM" => "Aramaic",
        "ART" => "Art",
        "ARTH" => "Art History",
        "BLBC" => "Bilingual/Bicultural Education",
        "BIO" => "Biology",
        "BIOS" => "Biology Education",
        "BLAW" => "Business Law",
        "CHEM" => "Chemistry",
        "CAST" => "Child Advocacy Studies",
        "CHIN" => "Chinese",
        "COBM" => "Coll of Business &amp; Management",
        "CMTC" => "Comm, Media &amp; Theatre-Comm",
        "CMTE" => "Comm, Media &amp; Theatre-Educ",
        "CMTM" => "Comm, Media &amp; Theatre-Media",
        "CMTT" => "Comm, Media &amp; Theatre-Theatre",
        "CS" => "Computer Science",
        "COUN" => "Counselor Education",
        "DANC" => "Dance",
        "ECED" => "Early Childhood Education",
        "ESCI" => "Earth Science",
        "ECON" => "Economics",
        "EDFN" => "Educational Foundations",
        "ELED" => "Elementary Education",
        "ENGL" => "English",
        "ELP" => "English Language Program",
        "ESL" => "English Second Language",
        "ENVI" => "Environmental Science",
        "EXSC" => "Exercise Science",
        "FINA" => "Finance",
        "FREN" => "French",
        "GES" => "Geography and Envir Studies",
        "GIFT" => "Gifted Education",
        "GS" => "Global Studies",
        "HLED" => "Health Education",
        "HIST" => "History",
        "ZHON" => "Honors Program",
        "ZAHS" => "Honors: Art History",
        "ZACT" => "Honors:Accounting",
        "ZBIO" => "Honors:Biology",
        "ZENG" => "Honors:English",
        "ZHIS" => "Honors:History",
        "ZMGT" => "Honors:Management",
        "ZMKG" => "Honors:Marketing",
        "ZMAT" => "Honors:Mathematics",
        "ZMDI" => "Honors:Media",
        "ZPHI" => "Honors:Philosophy",
        "ZSWK" => "Honors:Social Work",
        "ZSPE" => "Honors:Special Education",
        "HRD" => "Human Resource Development",
        "ICSE" => "Inner City Studies",
        "ITAL" => "Italian",
        "JPN" => "Japanese",
        "JUST" => "Justice Studies",
        "KOR" => "Korean",
        "LLAS" => "Latino and Latin Amer Studies",
        "LEAD" => "Leadership",
        "LING" => "Linguistics",
        "LTCY" => "Literacy Education",
        "MNGT" => "Management",
        "MKTG" => "Marketing",
        "MATH" => "Mathematics",
        "MLED" => "Middle Schl Educ &amp; Tchng",
        "MILS" => "Military Science",
        "MUS" => "Music",
        "NEIU" => "NEIU-Interdisciplinary",
        "NDP" => "Nontraditional Degree Programs",
        "PHIL" => "Philosophy",
        "PEMA" => "Phys Education Activity",
        "PEMT" => "Phys Education Theory",
        "PHYS" => "Physics",
        "POL" => "Polish",
        "PSCI" => "Political Science",
        "PSYC" => "Psychology",
        "READ" => "Reading",
        "SCED" => "Secondary Education",
        "SWK" => "Social Work",
        "SOC" => "Sociology",
        "SPAN" => "Spanish",
        "SPED" => "Special Education",
        "TESL" => "Tchng Engl Second Lang",
        "WGS" => "Women's and Gender Studies",
        "WLC" => "World Languages &amp; Cultures"


);

$currStudent = array(
        "na" => "Any",
        "u1" => "freshman",
        "u2" => "sophmore",
        "u3" => "junior",
        "u4" => "senior",
        "g1" => "Graduate Student (Ms)",
        "g2" => "Graduate Student (PhD)"



);

$currEthnic = array(
        "afri" => "African American",
        "hisp" => "Hispanic",
        "asia" => "Asian/Pacific Islander",
        "nati" => "Native American",
        "alas" => "Alaska Native",
        "cauc" => "Caucasian",
        "othe" => "Other Ethnic/Racial Heritage"
);

$currGender = array(
        "m" => "Male",
        "f" => "Female",
        "o" => "I prefer not say"
);