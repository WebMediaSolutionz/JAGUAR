var JAG = {
	currentPage: null,
	highlight: {
		'border': 'thin solid red'
	},

	lang: $( 'html' ).attr( 'lang' ),

	phones: null,

	init: function () {
		var self = this;

		self.currentPage = $( 'html' ).attr( 'data-currentpage' );

		// self
		// 	.getPhones()
		// 	.attachEvents()
		// .setupPagination();

		self
			.attachEvents()
			.setupPagination()
			.ellipsis();

		return self;
	},

	attachEvents: function () {
		var self = this;

	    $( '.menu' ).dropit();

	    $( '.slider' ).slick({
	    	vertical: true
	    });

	    $('.datepicker').datepicker();

	    $( '#myModal' ).on( 'shown.bs.modal', function () {
		  	$( '#myInput' ).focus();
		});

		$( 'a[href="#"]' ).click( function ( e ) {
			e.preventDefault();
		});

		self.stickyFooter();

		$( '.error_message .close' ).click( function () {
			$( this ).closest( '.error_message' ).fadeOut();
		});

		$( '.toggle_panel' ).click( function () {
			var clicked = $( this ),
				associated_section = clicked.attr( 'data-section' );

			associated_section = ( associated_section === undefined ) ? '.advanced_search_table' : '.' + associated_section;

			if ( clicked.hasClass( 'icon-plus-inverted' ) ) {
				clicked
					.closest( '.advanced_search' )
					.find( '.icon-plus-inverted' )
					.removeClass( 'icon-plus-inverted' )
					.addClass( 'icon-minus-inverted' );
			} else if ( clicked.hasClass( 'icon-minus-inverted' ) ) {
				clicked
					.closest( '.advanced_search' )
					.find( '.icon-minus-inverted' )
					.removeClass( 'icon-minus-inverted' )
					.addClass( 'icon-plus-inverted' );
			}

			if ( $( associated_section ).hasClass( 'open' ) ) {
				$( associated_section )
					.addClass( 'hide' )
					.addClass( 'closed' )
					.removeClass( 'open' );
			} else if ( $( associated_section ).hasClass( 'closed' ) ) {
				$( associated_section )
					.removeClass( 'hide' )
					.removeClass( 'closed' )
					.addClass( 'open' );
			}
		});

		$( '.js-show_list' ).click( function () {
			var word = $( this ),
				wording = word.text(),
				row_number = word.closest( 'tr' ).index(),
				row_number = parseInt( row_number ) + 2;

			switch ( wording ) {
				case "View List": 	wording = "Hide List";
									word.closest( 'tbody' ).find( 'tr:nth-child( ' + row_number + ' )' ).removeClass( 'hide' ).find( 'div' ).removeClass( 'hide' );

									$( '.js-hide_subscribers_list' ).click( function () {
										var word2 = $( this ),
											row_number = word2.closest( 'tr' ).index(),
											row_number = parseInt( row_number );

										$( this ).closest( '.subscriber_list' ).addClass( 'hide' ).closest( 'tr' ).addClass( 'hide' );
										word2.closest( 'tbody' ).find( 'tr:nth-child( ' + row_number + ' )' ).find( '.js-show_list' ).text( 'View List' );
									});
									break;

				case "Hide List": 	wording = "View List";
									word.closest( 'tbody' ).find( 'tr:nth-child( ' + row_number + ' )' ).addClass( 'hide' ).find( 'div' ).addClass( 'hide' );
									break;					
			}

			word.text( wording );
		});

		$( '.btn_group .btn' ).click( function () {
			var clicked_btn = $( this ),
				all_btns = clicked_btn.closest( '.btn_group' ).find( '.btn' );

			all_btns.removeClass( 'current' );
			clicked_btn.addClass( 'current' );
		});

		$( '.js-sort' ).click( function () {
			var clicked = $( this ),
				arrow_link = clicked.closest( 'div' ).find( '.js-sort.frg-icon' ),
				direction = null,
				field = arrow_link.attr( 'data-field' );

			arrow_link.addClass( 'holdup' );

			$( '.js-sort.frg-icon' ).not( '.holdup' ).removeClass( 'icon-arrow-up' ).addClass( 'icon-arrow-down' );

			if ( arrow_link.hasClass( 'icon-arrow-down' ) ) {
				arrow_link.removeClass( 'icon-arrow-down' ).removeClass( 'holdup' ).addClass( 'icon-arrow-up' );
				direction = -1;
			} else if ( arrow_link.hasClass( 'icon-arrow-up' ) ) {
				arrow_link.removeClass( 'icon-arrow-up' ).removeClass( 'holdup' ).addClass( 'icon-arrow-down' );
				direction = 1;
			}

			self.sortTable( field, direction );
		});

		self.setupFilters();

		$( '.js-sort-by' ).change( function () {
			var sort_value = $( this ).val();

			$( 'nav.filter_nav' ).addClass( 'hide' );
			$( 'nav.filter_nav.' + sort_value ).removeClass( 'hide' );
		});

		$( '.browse_files .frg-input-field, .browse_files .frg-button' ).click( function () {
			self.getFile();
		});

		$( '.js-view_more' ).click( function () {
			var clicked = $( this ),
				extra_features = clicked.closest( 'div' ).find( 'ul' );

			if ( clicked.hasClass( 'closed' ) ) {
				extra_features.show( "slow" );

				clicked
					.removeClass( 'closed' )
					.addClass( 'open' )
					.find( '.text' )
					.text( 'Hide subscribers' )
					.closest( '.js-view_more' )
					.find( '.frg-icon' )
					.addClass( 'icon-minus-circled' )
					.removeClass( 'icon-plus-circled' );
			} else if ( clicked.hasClass( 'open' ) ) {
				extra_features.hide( "slow" );

				clicked
					.removeClass( 'open' )
					.addClass( 'closed' )
					.find( '.text' )
					.text( 'View subscribers' )
					.closest( '.js-view_more' )
					.find( '.frg-icon' )
					.addClass( 'icon-plus-circled' )
					.removeClass( 'icon-minus-circled' );
			}
		});

		$( '.port select' ).change( function () {
			var clicked = $( this ),
				account_empty_box = clicked.closest( 'tr' ).find( '.account_nbr' ).find( '.empty' ),
				account_inputbox = clicked.closest( 'tr' ).find( '.account_nbr' ).find( 'input' ),
				phone_empty_box = clicked.closest( 'tr' ).find( '.existing_phone_nbr' ).find( '.empty' ),
				phone_inputbox = clicked.closest( 'tr' ).find( '.existing_phone_nbr' ).find( '.input_error_tooltip' );

			if ( clicked.val() === 'yes' ) {
				$( '.account_nbr' ).removeClass( 'hide' );
				$( '.existing_phone_nbr' ).removeClass( 'hide' );

				account_empty_box.addClass( 'hide' );
				phone_empty_box.addClass( 'hide' );
				account_inputbox.removeClass( 'hide' );
				phone_inputbox.removeClass( 'hide' );
			} else if ( clicked.val() === 'no' ) {
				account_empty_box.removeClass( 'hide' );
				phone_empty_box.removeClass( 'hide' );
				account_inputbox.addClass( 'hide' );
				phone_inputbox.addClass( 'hide' );
			}
		});

		$( '.sim select' ).change( function () {
			var clicked = $( this ),
				sim_empty_box = clicked.closest( 'tr' ).find( '.sim_nbr' ).find( '.empty' ),
				sim_inputbox = clicked.closest( 'tr' ).find( '.sim_nbr' ).find( '.frg-select-container, .status' );

			if ( clicked.val() === 'yes' ) {
				$( '.sim_nbr' ).removeClass( 'hide' );

				sim_empty_box.addClass( 'hide' );
				sim_inputbox.removeClass( 'hide' );
			} else if ( clicked.val() === 'no' ) {
				sim_empty_box.removeClass( 'hide' );
				sim_inputbox.addClass( 'hide' );
			}
		});

		$( '.frg-checkbox' ).click( function () {
			var clicked = $( this ),
				icon = clicked.find( '.icon .frg-icon' );

			if ( icon.hasClass( 'icon-checkmark' ) ) {
				icon.removeClass( 'icon-checkmark' );
			} else {
				icon.addClass( 'icon-checkmark' );
			}
		});

		$( '.frg-checkbox' ).click( function () {
			var clicked = $( this ),
				price = clicked.find( '.value' ).attr( 'data-value' ),
				quantity_txt = $( '.js-quantity' ),
				quantity = quantity_txt.val(),
				total = null;

			if ( $.isNumeric( quantity ) ) {
				// quantity_txt.removeClass( 'error' );
				total = ( quantity * price ) + ( quantity * 10 );
			} else {
				// quantity_txt.addClass( 'error' );
				total = parseInt( price ) + 10;
			}

			clicked.closest( 'section' ).closest( 'div' ).find( '.total' ).text( '$' + total );
		});

		$( '.edit_name' ).click( function () {
			var clicked = $( this ),
				closest = clicked.closest( 'p' ),
				title = closest.find( 'span, strong' ),
				textbox = closest.find( 'input' );

			clicked.addClass( 'hide' );
			title.addClass( 'hide' );
			textbox.removeClass( 'hide' );
		});

		$( '.js-auto_save' ).keypress( function ( e ) {
			var textbox = $( this ),
				value = textbox.val(),
				closest = textbox.closest( 'p' ),
				edit_name = closest.find( '.edit_name' ),
				title = closest.find( 'span, strong' );

			if ( e.which == 13 && value !== '' ) {
				textbox.addClass( 'hide' );
				edit_name.removeClass( 'hide' );
				title.text( value ).removeClass( 'hide' );
			}
		});

		$( '.plan .select' ).click( function () {
			var clicked = $( this ),
				plans = $( '.plan' ),
				selects = $( '.plan .frg-button.select' ),
				plan = clicked.closest( '.plan' ),
				select = plan.find( '.frg-button.select' ),
				price = plan.find( 'input[name=price_per_month]' ).val(),
				monthly = $( '.monthly' ),
				devices = $( 'input[name=nbr_device]' ).val(),
				monthly_balance = price * devices;

			selects.removeClass( 'current' ).text( 'Select' );
			select.addClass( 'current' ).text( 'Selected' );

			monthly_balance = '$' + parseFloat( monthly_balance, 10 ).toFixed( 2 ).replace( /(\d)(?=(\d{3})+\.)/g, "$1," ).toString();

			monthly.text( monthly_balance.substring( 0, monthly_balance.indexOf( '.' ) ) );
		});

		$( '.accessory .select, .service .select' ).click( function () {
			var clicked = $( this ),
				selected_text,
				unselected_text;

			switch ( self.currentPage ) {
				case 'addons' 		: 	selected_text = 'Add service';
										unselected_text = 'Remove service';
										break;

				case 'accessories' 	:
				case 'accessories2' :  	selected_text = 'Add to cart';
										unselected_text = 'Remove from cart';
										break;
			}

			if ( clicked.hasClass( 'current' ) ) {
				clicked.removeClass( 'current' ).text( selected_text );
			} else {
				clicked.addClass( 'current' ).text( unselected_text );
			}
		});

		$( '.advanced_option' ).change( function () {
			var $this = $( this ),
				value = $this.val();

			if ( value === 'import' ) {
				$('#myModal').modal();
			}
		});

		$( '.js-previous' ).click( function () {
			var clicked = $( this ),
				current_page = $( '.current.page' ),
				previous_page = ( current_page.length > 0 ) ? $( '.current.page' ).prev() : $( '.page:first-child' ),
				view_all_table = $( '.view_all' );

			view_all_table.addClass( 'hide' );

			if ( previous_page.length > 0 ) {
				current_page.removeClass( 'current' ).addClass( 'hide' );
				previous_page.removeClass( 'hide' ).addClass( 'current' );
			}

			self.setupPagination();
		});

		$( '.js-next' ).click( function () {
			var clicked = $( this ),
				current_page = $( '.current.page' ),
				next_page = ( current_page.length > 0 ) ? $( '.current.page + .page' ) : $( '.page:first-child' ),
				view_all_table = $( '.view_all' );

			view_all_table.addClass( 'hide' );

			if ( next_page.length > 0 ) {
				current_page.removeClass( 'current' ).addClass( 'hide' );
				next_page.removeClass( 'hide' ).addClass( 'current' );
			}

			self.setupPagination();
		});

		$( '.js-view_all' ).click( function () {
			var pages = $( '.page' ),
				current = $( '.page.current' );

			if ( current.length === 0 ) {
				current = $( '.current' );
			}

			if ( current.is( 'table' ) ) {
				var view_all_table = $( '.view_all' ),
					rows = pages.find( 'tbody tr' ).clone();

				pages.addClass( 'hide' ).removeClass( 'current' );

				view_all_table
					.removeClass( 'hide' )
					.addClass( 'current' )
					.find( 'tbody' )
					.html( rows );
			} else {
				pages
					.removeClass( 'current' )
					.removeClass( 'hide' );
			}

			self.setupPagination();
		});

		$( '.js-phone_nbr' ).blur( function () {
			var el = $( this ),
				parent = el.closest( '.input_error_tooltip' ),
				valid = false;

			if ( !valid ) {
				parent.addClass( 'error' );
			}
		});

		$( '.js-quantity' ).keyup( function () {
			var quantity_field = $( this ),
				entered_value = quantity_field.val(),
				status = quantity_field.closest( '.status' ),
				accessory_atc = status.closest( '.accessory' ).find( '.frg-button' ),
				device_atc = status.closest( 'section' ).closest( 'div' ).find( '.frg-button.color-green' ),
				max_quantity = parseInt( status.find( '.js-max_quantity' ).val() ),
				availability = $( 'span.status' );

			if ( $.isNumeric( entered_value ) ) {
				if ( entered_value >= max_quantity ) {
					status
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.find( '.tooltip_bubble span' )
						.text( 'The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available' );

					accessory_atc.addClass( 'state-disabled' );
					device_atc.addClass( 'state-disabled' );

					availability
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.text( 'Back order' );
				} else {
					status
						.removeClass( 'negative' )
						.addClass( 'positive' );
						
					accessory_atc.removeClass( 'state-disabled' );
					device_atc.removeClass( 'state-disabled' );

					availability
						.removeClass( 'negative' )
						.addClass( 'positive' )
						.text( 'Available' );
				}
			} else {
				accessory_atc.addClass( 'state-disabled' );
				device_atc.addClass( 'state-disabled' );

				if ( entered_value !== '' ) {
					availability
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.text( 'Invalid entry' );

					status
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.find( '.tooltip_bubble span' )
						.text( 'please, enter a valid number' );	
				} else {
					status
						.removeClass( 'negative' )
						.addClass( 'positive' );

					availability.text( '' );
				}
				
			}
		});

		$( '.js-validate_number' ).keyup( function () {
			var clicked = $( this ),
				value = clicked.val(),
				status = clicked.closest( '.status' ),
				tooltip_bubble = status.find( '.tooltip_bubble span' );

			if ( value !== '' && !$.isNumeric( value ) ) {
				status
					.removeClass( 'positive' )
					.addClass( 'negative' );

				tooltip_bubble.text( 'Please, enter a valid number' );
			} else {
				status
					.removeClass( 'negative' )
					.addClass( 'positive' );
			}
		});

		$( '.js-form-complete' ).keyup( function () {
			self.formCompleted();
		}).click( function () {
			self.formCompleted();
		});

		// self.showFakeLinks();

		return self;
	},

	formCompleted: function () {
		var fields = $( '.js-form-complete' ),
			text_form_completed = true,
			radio_form_completed = false,
			save_continue = $( '.frg-button' );

		fields.each( function () {
			var field = $( this );

			if ( field.attr( 'type' ) === 'text' ) {
				if ( field.val() === '' ) {
					text_form_completed = false;
				}
			}

			if ( field.attr( 'type' ) === 'radio' ) {
				if ( field.is( ':checked' ) ) {
					radio_form_completed = true;
				}
			}
		});

		if ( text_form_completed || radio_form_completed ) {
			save_continue.removeClass( 'state-disabled' );
		} else {
			save_continue.addClass( 'state-disabled' );
		}
	},

	setupFilters: function () {
		var self = this;

		$( '.js-filter' ).click( function () {
			var clicked = $( this ),
				filters = $( 'nav ul li .js-filter' ),
				applied_filter = $( '.js-applied_filter' );

			if ( !clicked.hasClass( 'btn' ) ) {
				filters.removeClass( 'current' );	
				clicked.addClass( 'current' );
			}

			var filter = $( 'nav ul li .js-filter.current' ),
				filter_text = filter.attr( 'data-filter' ),
				specific_spelling = filter.attr( 'data-specific-spelling' ),
				applied_filter_text = ( specific_spelling !== undefined ) ? specific_spelling : self.capitalizeFirstLetter( filter_text.replace( '_', ' ' ) ),
				second_filter = $( '.js-filter.btn.current' ),
				second_filter_text = ( second_filter.length === 1 ) ? second_filter.attr( 'data-filter' ) : null,
				items = $( '.object' );

			items.show();
			applied_filter.text( applied_filter_text );

			items.each( function () {
				var item = $( this );

				if ( filter_text === 'all' ) {
					if ( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) !== -1 ) {
						item.show();
					} else if( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) === -1 ) {
						item.hide();
					} else if ( second_filter_text === null ) {
						item.show();
					}
				} else if ( item.attr( 'data-filter' ).indexOf( filter_text ) === -1 || ( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) === -1 ) ) {
					item.hide();
				}
			});

			if ( self.currentPage === 'accessories' ) {
				self.rearrangeSeparators();
			}
		});
	},

	getFile: function (){
        $( '.upfile' ).click();
    },

	capitalizeFirstLetter: function ( word ) {
	    return word.charAt(0).toUpperCase() + word.slice(1);
	},

	rearrangeSeparators: function () {
		$( '.object' ).removeClass( 'separator' ).addClass( 'separator' );

		$( '.object:visible:first' ).removeClass( 'separator' );

		$( '.object:visible' ).each( function ( count ) {
			if ( count % 3 === 0 ) {
				$( this ).removeClass( 'separator' );
			}
		});
	},

	sortTable: function ( field, direction ) {
		var tbody = document.getElementById( "sortable" ),
			rows = tbody.rows,
            rlen = rows.length,
            arr = new Array(),
            i, j, cells, clen;

        // fill the array with values from the table
        for ( i = 0; i < rlen; i++ ) {
            cells = rows[ i ].cells;
            clen = cells.length;
            arr[ i ] = new Array();

            for ( j = 0; j < clen; j++ ) {
                arr[ i ][ j ] = cells[ j ].innerHTML;
            }
        }

        // sort the array by the specified column number (col) and order (asc)
        arr.sort( function ( a, b ) {
            return ( a[ field ] == b[ field ] ) ? 0 : ( ( a[ field ] > b[ field ] ) ? direction : -1 * direction );
        });

        // replace existing rows with new rows created from the sorted array
        for ( i = 0; i < rlen; i++ ) {
            rows[ i ].innerHTML = "<td>" + arr[ i ].join( "</td><td>" ) + "</td>";
        }
	},

	displayErrorMessage: function ( type, title, text ) {
		var error_container = $( '.error_message_container' );

		switch ( type ) {
			case 'warning' : 	type = 'icon-warning-inverted';
		}

		error_container.append( '<div class="error_message warning clearfix"><a class="close right" href="#"><span>Close</span> <span class="frg-icon icon-x-circled"></span></a><div class="content clearfix"><div class="frg-icon ' + type + ' left"></div><div class="text left"><div class="h3 title">' + title + '</div><span class="text">' + text + '</span></div></div></div>' );

		$( '.error_message .close' ).click( function () {
			$( this ).closest( '.error_message' ).fadeOut();
		});
	},

	showFakeLinks: function () {
		var self = this;

		$( 'a[href="#"]' ).css( self.highlight );

		return self;
	},

	stickyFooter: function () {
		var footerHeight = 0,
			footerTop = 0,
			$footer = $( '.stickyFooter' ),
			cutoff = ( $footer.length ) ? $footer[ 0 ].offsetTop : null;

		if ( cutoff !== null ) {
			positionFooter();
		}

		function positionFooter () {
			footerHeight = $footer.height();
			footerTopInt = ( $( window ).scrollTop() + $( window ).height() - footerHeight );
			footerTop = footerTopInt + "px";

			var cssSettings = {
				pos_absolute: {
					position: "absolute",
					top: footerTop,
					height: "100px"
				},

				pos_static : {
					position: "static"
				}
			};

			if ( footerTopInt < cutoff ) {
				$footer.addClass( 'sticky' );
			} else {
				$footer.removeClass( 'sticky' );
			}
		}

		$( window )
			.scroll( positionFooter )
			.resize( positionFooter )
	},

	getPhones: function () {
		var self = this;

		if ( self.currentPage === 'devices' ) {
			$.ajax({
				url: "http://www.telus.com/services/cms/page/" + self.lang + "/bc/mobility/devices",
			}).done(function( data ) {
				self.phones = data.devices;

			 	$.each( self.phones, function ( i, phone ) {
			 		var listing = '';

			 		console.info( phone );

			 		listing += '<div class="box phone object clearfix left" data-filter="all voice_only">';
					listing += '	<div class="image left">';
					listing += '		<a href="device.php">';
					for ( var i = 0; i < phone.variants.length; i++ ) {
						var visibility = ( i === 0 ) ? '' : ' hide';

						listing += '			<img class="js-' + phone.variants[ i ].id + visibility + '" src="' + phone.variants[ i ].image_url + '" alt="' + phone.variants[ i ].color_name + '" />';
					}

					listing += '		</a>';

					listing += '		<div class="device__variant-container">';

 					for ( var i = 0; i < phone.variants.length; i++ ) {
						listing += '			<button class="device-color-button device__variant-item" data-lang="en" data-sku="' + phone.variants[ i ].id + '" aria-label="' + phone.variants[ i ].color_name + '">';
						listing += '				<span class="frg-icon icon-circle-solid" style="color: ' + phone.variants[ i ].color_hex + '"></span>';
						listing += '			</button>';
					}

					listing += '		</div>';
					listing += '	</div>';

					listing += '	<div class="description right">';
					listing += '		<div class="name">';
					listing += '			<div>';
					listing += '				<h6><a href="device.php">' + phone.name + '</a></h6>';
					listing += '			</div>';
					listing += '			<div class="status positive">Available</div>';
					listing += '		</div>';

					listing += '		<div class="prices">';
					listing += '			<div class="no-term left">';
					listing += '				<h4>$200</h4>';
					listing += '				<span class="time_period">No term</span>';
					listing += '			</div>';

					listing += '			<div class="long-term right">';
					listing += '				<h4>$50</h4>';
					listing += '				<span class="time_period">3 year term</span>';
					listing += '			</div>';
					listing += '			<div class="clear"></div>';
					listing += '		</div>';

					listing += '		<div class="mtm">';
					listing += '			<div class="gray_text">$230 Monthly</div>';
					listing += '			<a class="frg-button" href="device.php">Select</a>';
					listing += '		</div>';
					listing += '	</div>';
					listing += '	<div class="clear"></div>';
					listing += '</div>';

					$( '.phones' ).append( listing );

					self.showVariants();
			 	});
			});
		}

		return self;
	},

	showVariants: function () {
		$( '.device-color-button' ).click( function () {
			var clicked = $( this ),
				phoneId = clicked.attr( 'data-sku' ),
				image = clicked.closest( '.image' ),
				matchingVariant = image.find( '.js-' + phoneId ),
				allVariants = image.find( 'img' );

			allVariants.addClass( 'hide' );
			matchingVariant.removeClass( 'hide' );
		});
	},

	setupPagination: function () {
		var self = this,
			display = $( '.paging_display' ),
			from_txt = display.find( '.from' ),
			to_txt = display.find( '.to' ),
			total = display.find( '.total' ),
			pages = $( '.page' ),
			nbr_rows = pages.find( 'tbody tr' ),
			current_table = $( '.page.current' );

		if ( current_table.length === 0 ) {
			current_table = $( '.view_all.current' );
		}

		from_txt.text( parseInt( current_table.attr( 'data-from' ) ) + 1 );
		to_txt.text( parseInt( current_table.attr( 'data-from' ) ) + current_table.find( 'tbody tr' ).length );
		total.text( nbr_rows.length );

		return self;
	},

	ellipsis: function () {
		var self = this,
			string = $( '.js-ellipsis' );

		string.each( function () {
			var str = $( this ),
				len = str.attr( 'data-maxlen' );

			if ( str.text().length > len ) {
				str.text( str.text().substr( 0, parseInt(len) - 3 ) + '...' );
			}
		});

		return self;
	}
};