function MarkValidationErrors(errors) {
	if (!errors) {
		return;
	}
	for (var key in errors) {
		var message = errors[key];
		var json_obj;
		try {
			json_obj = JSON.parse(message);
		} catch (e) {
			json_obj = null;
		}
		if (!json_obj) {
			item = document.getElementsByName(key)[0];
			if (item) {
				item.className = "studenterror"
			}
		} else {
			for(var idx in json_obj) {
				field = json_obj[idx];
				for (var name in field) {
					itemname = key + "[" + idx + "][" + name + "]";
					item = document.getElementsByName(itemname)[0];
					item.className = "studenterror";
				}
			}
		}
	}
}
function append_contacts(contacts) {
	var tbody = document.getElementById("contacts_tbody");
	var src_row = document.getElementById("contact_row");
	//
	//	json-array contacts verwerken.
	for (idx in contacts) {
		var contact = contacts[idx];
		//
		//	Geen data. Verlaat loop.
		if ("object" != typeof contact) {
			continue;
		}
		//	Geen data. Verlaat loop.
		if (!contact.hasOwnProperty('app_person_id')) {
			continue;
		}
		//
		//	Clone source <tr>
		var new_row = src_row.cloneNode(true);
		new_row.setAttribute("id", undefined);
		//
		//	Eerste <td> in nieuwe <tr>
		var td = new_row.firstElementChild;
		//
		//	Eerst <input type='hidden'> met APPLICATIONPERSON.APP_PERSON_ID
		var inp = td.firstElementChild;
		inp.setAttribute("name", "contacts[" + idx + "][app_person_id]");
		inp.value = contact["app_person_id"];
		//
		//	Ten tweede <input type='hidden'> met ApplicationPerson_CONTACTS.APPLICATION
		var inp = inp.nextElementSibling;
		inp.setAttribute("name", "contacts[" + idx + "][application]");
		inp.value = contact["application"];
		//
		//	Ten derde <select> met contact type
		inp = inp.nextElementSibling;
		inp.setAttribute("name", "contacts[" + idx + "][contacttype]");
		for(var i = 0; i < inp.options.length; i++) {
			if (contact["contacttype"] == inp.options[i].getAttribute("value")) {
				inp.selectedIndex = i;
				break;
			}
		}
		//
		//	Volgende <td> in nieuwe <tr>
		td = td.nextElementSibling;
		//
		//	Eerste <input type='text'> met contact waarde
		inp = td.firstElementChild;
		inp.setAttribute("name", "contacts[" + idx + "][value]");
		inp.value = contact["value"];
		//
		//	Volgende <td> in nieuwe <tr>
		td = td.nextElementSibling;
		//
		//	Eerste <input type='checkbox'> met contact beperkt
		inp = td.firstElementChild;
		inp.setAttribute("name", "contacts[" + idx + "][restricted]");
		if (contact["restricted"]) {
			inp.checked = true;
		}
		//
		//	Voeg nieuwe <tr> toe vóór source row.
		tbody.insertBefore(new_row, src_row);
		idx++;
	}
}
