{"version":3,"sources":["form_init.js"],"names":["BX","namespace","Landing","EmbedForms","this","forms","formsData","prototype","add","formNode","form","EmbedFormEntry","push","remove","formToRemove","getFormByNode","unload","filter","reload","result","forEach","getNode","node","formObject","init","ATTR_FORM_ID","ATTR_FORM_ID_STR","ATTR_USE_STYLE","ATTR_USE_STYLE_STR","ATTR_DESIGN","ATTR_IS_CONNECTOR","FORM_ID_MATCHER","PRIMARY_OPACITY_MATCHER","formParams","dataset","showNoFormsMessage","split","length","useStyle","designAttr","design","JSON","parse","replaceAll","getMode","idMarker","match","loadParamsById","then","load","bind","catch","id","sec","url","formId","Backend","getInstance","action","Object","keys","ID","SECURITY_CODE","URL","Promise","reject","error","message","desc","innerHTML","createErrorMessage","onCustomEvent","title","undefined","alertHtml","success","script","loadScript","b24form","App","getId","setFormObject","object","cacheTime","Date","now","document","createElement","setAttribute","innerText","appendChild","onFormLoad","adjust","getParams","params","shadow","font","primaryColor","getComputedStyle","documentElement","getPropertyValue","trim","property","color","hasOwnProperty","replace","background","popupBackground","slice","assign","embedForms","window","addEventListener","event","detail","parentElement","addCustomEvent","block","querySelector","makeRelativeSelector"],"mappings":"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","file":"form_init.map.js"}