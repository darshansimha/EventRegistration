$(function() {
	var availableNames=[];
	var availablecws=[];
	for(i=0;i<guest_list.length;i++){
		availableNames[i]=guest_list[i].name;
		availablecws[i]=guest_list[i].cws;
	}
	 $("#eName").autocomplete({
      source: availableNames
	});
	$("#cws").autocomplete({
      source: availablecws
	});
	
	$("#eName" ).on( "autocompleteselect", function( event, ui ) {
		var nm=ui.item.value;
		var cws='';
		var phone='';
		var adults='';
		var k1='';
		var k2='';
		var k3='';
		var section='';
		var souvenir = 1;
		for(i=0;i<guest_list.length;i++){
			if(guest_list[i].name==nm){
				cws=guest_list[i].cws;
				phone=guest_list[i].phone;
				adults=guest_list[i].adults;
				k1=guest_list[i].k1;
				k2=guest_list[i].k2;
				k3=guest_list[i].k3;
				souvenir = guest_list[i].souvenir;
				section=guest_list[i].section;
			}
		
		}
		$("#aCount").val(adults);
		$("#c5Count").val(k1);
		$("#c510Count").val(k2);
		$("#c10Count").val(k3);
		$("#cws").val(cws);
		$("#phone").val(phone);
		if(souvenir == 1){
			$("#souvenir").attr('checked',true);
			$("#souvenir").val(1);
		}
		else{
			$("#souvenir").attr('checked',false);
			$("#souvenir").val(0);
		}
		$("#section").val(section);
		
		
	} );
	
	$("#cws" ).on( "autocompleteselect", function( event, ui ) {
		var nm='';
		var cws=ui.item.value;
		var phone='';
		var adults='';
		var k1='';
		var k2='';
		var k3='';
		var section='';
		var souvenir = 1;
		for(i=0;i<guest_list.length;i++){
			if(guest_list[i].cws==cws){
				nm=guest_list[i].name;
				phone=guest_list[i].phone;
				adults=guest_list[i].adults;
				k1=guest_list[i].k1;
				k2=guest_list[i].k2;
				k3=guest_list[i].k3;
				souvenir = guest_list[i].souvenir;
				section=guest_list[i].section;
			}
		
		}
		$("#aCount").val(adults);
		$("#c5Count").val(k1);
		$("#c510Count").val(k2);
		$("#c10Count").val(k3);
		$("#eName").val(nm);
		$("#phone").val(phone);
		if(souvenir == 1){
			$("#souvenir").attr('checked',true);
			$("#souvenir").val(1);
		}
		else{
			$("#souvenir").attr('checked',false);
			$("#souvenir").val(0);
		}
		$("#section").val(section);
		
		
	} );
	
	$("#submitButton").click(function(){
		if($("#eName").val() != '' && $("#cws").val() !='' && $("#cws").val().length>=6){
			var name=$("#eName").val();
			var cws=$("#cws").val();
			var phone=$("#phone").val();
			var adults=$("#aCount").val();
			var k3=$("#c5Count").val();
			var k2=$("#c510Count").val();
			var k1=$("#c10Count").val();
			var section=$("#section").val();
			var souvenir=$("#souvenir").val();			  
			$.ajax({
					type:"post",
					url:"index.php",
					data:"name="+name+"&cws="+cws+"&phone="+phone+"&adults="+adults+"&k1="+k1+"&k2="+k2+"&k3="+k3+"&section="+section+"&souvenir="+souvenir,
					 success:function(data){
						if(data==''){
							$("#eName").val('');
							$("#aCount").val('');
							$("#c5Count").val('');
							$("#c510Count").val('');
							$("#c10Count").val('');
							$("#cws").val('');
							$("#phone").val('');
							$("#section").val('');
							$('.bg-danger').html("Warning! Duplicate Entry for the same employee");
							$('.bg-danger').show();
							setTimeout(function(){
								$('.bg-danger').html('');
								$('.bg-danger').hide();
							},3000);
						}
						else{
							$("#eName").val('');
							$("#aCount").val('');
							$("#c5Count").val('');
							$("#c510Count").val('');
							$("#c10Count").val('');
							$("#cws").val('');
							$("#phone").val('');
							$("#section").val('');
							$('.bg-success').html("Successfully Added a New Record");
							$('.bg-success').show();
							setTimeout(function(){
								$('.bg-success').html('');
								$('.bg-success').hide();
							},3000);
						}
					}
						
	 
			});
		}
		else{
			$("#eName").addClass('invalid');
			$("#cws").addClass('invalid');
		}
 
    });
});