var JAG = {
	currentPage: null,
	highlight: {
		'border': 'thin solid red'
	},

	lang: $( 'html' ).attr( 'lang' ),

	phones: null,

	cities: cities,

	formEntriesValid: true,

	opts2: {
		color: '#4B286D', //#00FF00 green, #8C68A6 for purple #rgb or #rrggbb
		top: '5%', // Top position relative to parent in px or % (use 'x%')
		left: '5%', // Left position relative to parent in px or % (use 'x%')
		lines: 13, // The number of lines to draw
		length: 25, // The length of each line
		width: 10, // The line thickness
		radius: 40, // The radius of the inner circle
		corners: 1, // Corner roundness (0..1)
		rotate: 0, // The rotation offset
		speed: 1, // Rounds per second
		trail: 80, // Afterglow percentage
		shadow: false, // Whether to render a shadow
		hwaccel: false, // Whether to use hardware acceleration
		className: 'spinner2', // The CSS class to assign to the spinner
		zIndex: 2e9 // The z-index (defaults to 2000000000)*/
	},

	target2: null,

	spinner2: null,

	environment: null,

	init: function () {
		var self = this;

		self
			.setEnvironment()
			.setupCurrentPage()
			.showVariants()
			.attachEvents()
			.setupPagination()
			.ellipsis()
			.setupDueNow()
			.setupInputMasks();

		if ( self.currentPage === 'corporate_settings' ) {
			self.setupTabs();
		}

		if ( self.currentPage === 'devices' || self.currentPage === 'device' || self.currentPage === 'accessories' ) {
			self.check_image_availability();
		}

		return self;
	},

	setEnvironment: function () {
		var self = this,
			currentURL = $( location ).attr( 'href' );

		if ( currentURL.indexOf( 'localhost' ) != -1 ) {
			self.environment = 'local';
		} else if ( currentURL.indexOf( 'webmediasolutionz' ) != -1 ) {
			self.environment = 'staging';
		} else {
			self.environment = 'production';
		}

		return self;
	},

	setupCurrentPage: function () {
		var self = this;

		self.currentPage = $( 'html' ).attr( 'data-currentpage' );

		return self;
	},

	setupTabs: function () {
		var self = this;

		$('#tab-container').easytabs({
			animate: false
		});

		return self;
	},

	attachEvents: function () {
		var self = this;

	    $( '.menu' )
	    	.dropit()
	    	.find( '.hide' )
	    	.removeClass( 'hide' );

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
				associated_section = clicked.attr( 'data-section' ),
				advanced_search_table = clicked.closest( '.outer-container' ).find( '.advanced_search_table' ),
				fields = advanced_search_table.find( 'input' ),
				submit = advanced_search_table.find( '.frg-button' ),
				at_least_one = false;

			fields.each( function () {
				var field = $( this );

				if ( field.val().length > 0 ) {
					at_least_one = true;
				}
			});

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
				case "View list": 	wording = "Hide list";
									word.closest( 'tbody' ).find( 'tr:nth-child( ' + row_number + ' )' ).removeClass( 'hide' ).find( 'div' ).removeClass( 'hide' );

									$( '.js-hide_subscribers_list' ).click( function () {
										var word2 = $( this ),
											row_number = word2.closest( 'tr' ).index(),
											row_number = parseInt( row_number );

										$( this ).closest( '.subscriber_list' ).addClass( 'hide' ).closest( 'tr' ).addClass( 'hide' );
										word2.closest( 'tbody' ).find( 'tr:nth-child( ' + row_number + ' )' ).find( '.js-show_list' ).text( 'View list' );
									});
									break;

				case "Hide list": 	wording = "View list";
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
					.text( 'Hide all' )
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
					.text( 'View all' )
					.closest( '.js-view_more' )
					.find( '.frg-icon' )
					.addClass( 'icon-plus-circled' )
					.removeClass( 'icon-minus-circled' );
			}
		});

		$( '.port select' ).change( function () {
			var clicked = $( this ),
				tr = clicked.closest( 'tr' ),
				account_empty_box = tr.find( '.account_nbr' ).find( '.empty' ),
				account_inputbox = tr.find( '.account_nbr' ).find( 'input' ),
				phone_empty_box = tr.find( '.existing_phone_nbr' ).find( '.empty' ),
				phone_inputbox = tr.find( '.existing_phone_nbr' ).find( '.status' ),
				calling_city_empty_box = tr.find( '.js-calling-city' ).find( '.empty' ),
				calling_city_inputbox = tr.find( '.js-calling-city' ).find( 'input' ),
				area_codes_empty_box = tr.find( '.js-preferred-area-code' ).find( '.empty' ),
				area_codes_inputbox = tr.find( '.js-preferred-area-code' ).find( '.frg-select-container' );

			if ( clicked.val() === 'yes' ) {
				$( '.account_nbr' ).removeClass( 'hide' );
				$( '.existing_phone_nbr' ).removeClass( 'hide' );

				account_empty_box.addClass( 'hide' );
				phone_empty_box.addClass( 'hide' );
				account_inputbox.removeClass( 'hide' );
				phone_inputbox.removeClass( 'hide' );
				calling_city_empty_box.removeClass( 'hide' );
				calling_city_inputbox.addClass( 'hide' );
				area_codes_empty_box.removeClass( 'hide' );
				area_codes_inputbox.addClass( 'hide' );
			} else if ( clicked.val() === 'no' ) {
				account_empty_box.removeClass( 'hide' );
				phone_empty_box.removeClass( 'hide' );
				account_inputbox.addClass( 'hide' );
				phone_inputbox.addClass( 'hide' );
				calling_city_empty_box.addClass( 'hide' );
				calling_city_inputbox.removeClass( 'hide' );
				area_codes_empty_box.addClass( 'hide' );
				area_codes_inputbox.removeClass( 'hide' );
			}
		});

		$( '.sim select' ).change( function () {
			var clicked = $( this ),
				sim_empty_box = clicked.closest( 'tr' ).find( '.sim_nbr' ).find( '.empty' ),
				sim_inputbox = clicked.closest( 'tr' ).find( '.sim_nbr' ).find( '.frg-select-container, .status' );

			if ( clicked.val() === '0' ) {
				$( '.sim_nbr' ).removeClass( 'hide' );

				sim_empty_box.addClass( 'hide' );
				sim_inputbox.removeClass( 'hide' );
			} else {
				sim_empty_box.removeClass( 'hide' );
				sim_inputbox.addClass( 'hide' );
			}

			self.setupDueNow();
		});

		$( '.frg-checkbox input[type=checkbox]' ).click( function () {
			var clicked = $( this ).closest( '.frg-checkbox' ),
				icon = clicked.find( '.icon .frg-icon' );

			if ( icon.hasClass( 'icon-checkmark' ) ) {
				icon.removeClass( 'icon-checkmark' );
			} else {
				icon.addClass( 'icon-checkmark' );
			}
		});

		if ( self.environment != 'production' ) {
			$( '.frg-checkbox.parent input[type=checkbox]' ).click( function () {
				 var parent_checkbox = $( this ), 
				 	checked = parent_checkbox.is( ':checked' ),
				 	child_checkboxes = parent_checkbox
				 						.closest( 'tr' )
				 						.next()
				 						.find( '.frg-checkbox input[type=checkbox]' );

				 child_checkboxes.each( function () {
				 	var checkbox = $( this );

				 	if ( checked ) {
				 		if ( checkbox.is( ':checked' ) ) {
				 			checkbox.trigger( 'click' );
				 		}
				 	} else {
				 		if ( !checkbox.is( ':checked' ) ) {
				 			checkbox.trigger( 'click' );
				 		}
				 	}
				 });
			});
		}

		$( '.js-select-all' ).click( function () {
			var clicked = $( this ),
				clicked_internal_checkbox = clicked.find( 'input[type=checkbox]' ),
				checked = clicked_internal_checkbox.is( ':checked' ),
				checkboxes = $( '.frg-checkbox' );

			checkboxes.each( function () {
				var checkbox = $( this ),
					actual_checkbox = checkbox.find( 'input[type=checkbox]' );

				if ( !checkbox.hasClass( 'js-select-all' ) ) {
					if ( checked ) {
						if ( !actual_checkbox.is( ':checked' ) ) {
							self.selectCheckbox( 'select', checkbox );
						}
					} else {
						if ( actual_checkbox.is( ':checked' ) ) {
							self.selectCheckbox( 'deselect', checkbox );
						}
					}
				}
			});
		});

		$( '.edit_name' ).click( function () {
			var clicked = $( this ),
				closest = clicked.closest( 'p' ),
				container = closest.find( '.group_name_container' ),
				textbox = closest.find( 'input' );

			clicked.addClass( 'hide' );
			container.addClass( 'hide' );
			textbox.removeClass( 'hide' ).focus();
		});

		$( '.js-auto_save' ).keypress( function ( e ) {
			var textbox = $( this ),
				value = textbox.val(),
				closest = textbox.closest( 'p' ),
				container = closest.find( '.group_name_container' ),
				edit_name = closest.find( '.edit_name' ),
				code = e.which || e.keyCode;

			if ( ( code == 13 || code == 9 ) && value !== '' ) {
				textbox.addClass( 'hide' );
				edit_name.removeClass( 'hide' );

				container
					.text( value )
					.attr( 'fullname', value )
					.removeClass( 'hide' );
			}

			self.ellipsis();
		}).blur( function ( e ) {
			var textbox = $( this ),
				value = textbox.val(),
				closest = textbox.closest( 'p' ),
				container = closest.find( '.group_name_container' ),
				edit_name = closest.find( '.edit_name' ),
				code = e.which || e.keyCode;

			if ( ( code == 13 || code == 9 ) && value !== '' ) {
				textbox.addClass( 'hide' );
				edit_name.removeClass( 'hide' );
				
				container
					.text( value )
					.attr( 'fullname', value )
					.removeClass( 'hide' );
			}

			self.ellipsis();
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

			monthly_balance = self.currencyFormat( monthly_balance );

			monthly.text( monthly_balance.substring( 0, monthly_balance.indexOf( '.' ) ) );
		});

		$( '.service .select' ).click( function () {
			var clicked = $( this ),
				selected_text = 'Add service',
				unselected_text = 'Remove service';

			if ( clicked.hasClass( 'current' ) ) {
				clicked.removeClass( 'current' );

				if ( clicked.is( 'input' ) ) {
					clicked.val( selected_text );
				} else {
					clicked.text( selected_text );
				}

			} else {
				clicked.addClass( 'current' );

				if ( clicked.is( 'input' ) ) {
					clicked.val( unselected_text );
				} else {
					clicked.text( unselected_text );
				}
			}
		});

		$( '.advanced_import' ).click( function () {
			$('#myModal').modal();
		});

		$( '.js-previous' ).click( function () {
			var clicked = $( this ),
				current_page = $( '.current.page' ),
				previous_page = $( '.current.page' ).prev(),
				view_all_table = $( '.view_all' );

			if ( previous_page.is( 'table' ) ) {
				view_all_table.addClass( 'hide' );

				if ( previous_page.length > 0 ) {
					current_page.removeClass( 'current' ).addClass( 'hide' );
					previous_page.removeClass( 'hide' ).addClass( 'current' );
				}

				if ( !previous_page.prev().is( 'table' ) ) {
					clicked.text( ' - ' );
				}

				self.setupPagination();
			}
		});

		$( '.js-next' ).click( function () {
			var clicked = $( this ),
				current_page = $( '.current.page' ),
				next_page = $( '.current.page + .page' ),
				view_all_table = $( '.view_all' ),
				previous = $( '.js-previous' );

			if ( next_page.is( 'table' ) ) {
				view_all_table.addClass( 'hide' );

				previous.text( 'Previous 10' );

				if ( next_page.length > 0 ) {
					current_page.removeClass( 'current' ).addClass( 'hide' );
					next_page.removeClass( 'hide' ).addClass( 'current' );
				}

				self.setupPagination();
			}
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

		/* error handling portability */
		$( '.js-phone_nbr' ).blur( function () {
			var el = $( this ),
				parent = el.closest( '.input_error_tooltip' ),
				valid = false;

			if ( !valid ) {
				parent.addClass( 'error' );
			}
		});
		/******************************************/

		$( '.js-quantity' ).keyup( function () {
			var quantity_field = $( this ),
				entered_value = quantity_field.val(),
				num = quantity_field.attr( 'data-num' ) || null,
				status = quantity_field.closest( '.status' ),
				accessory_atc = status.closest( '.accessory' ).find( '.frg-button' ),
				device_atc = status.closest( 'section' ).closest( 'div' ).find( '.frg-button.color-green' ),
				max_quantity = parseInt( status.find( '.js-max_quantity' ).val() ),
				availability = ( num !== null ) ? $( 'span.status[data-num=' + num + ']' ) : $( 'span.status' );

			if ( $.isNumeric( entered_value ) ) {
				if ( entered_value > max_quantity ) {
					var tooltip_message = ( max_quantity === 0 ) ? 'sorry, this item is not available at the moment' : 'The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available';

					status
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.find( '.tooltip_bubble span' )
						.text( tooltip_message );

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

					if ( accessory_atc.hasClass( 'added' ) ) {
						accessory_atc.text( 'Update' );
					} else {
						accessory_atc.text( 'Add to cart' );
					}

					device_atc.removeClass( 'state-disabled' ).text( 'Add to cart' );

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
					if ( max_quantity !== 0 ) {
						status
							.removeClass( 'negative' )
							.addClass( 'positive' );

						availability.text( '' );
					}
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

		$( '.existing_phone_nbr .js-phone_input_mask' ).blur( function () {
			var clicked = $( this );

			if ( self.portabilityCheck() ) {
				clicked.closest( '.status' )
					.removeClass( 'negative' )
					.addClass( 'positive' );
			} else {
				clicked.closest( '.status' )
					.removeClass( 'positive' )
					.addClass( 'negative' );
			}
		});

		$( '.js-cities-auto-complete' ).keyup( function () {
			var field = $( this ),
				field_text = field.val(),
				results = [],
				results_box = field.parent().find( '.js-auto-complete-results' );

			if ( field_text.length >=  3 ) {
				for ( var i = 0; i < self.cities.length; i++ ) {
					if ( self.cities[ i ].value.toLowerCase().indexOf( field_text ) !== -1 ) {
						results.push( self.cities[ i ] );
					}
				}
			}

			results_box.text( '' );

			if ( results.length > 0 ) {
				results_box.removeClass( 'hide' );

 				for ( var i = 0; i < results.length; i++ ) {
					results_box.append( '<a class="block js-auto-complete-result" data-areacodes="' + results[ i ].data + '" href="#">' + results[ i ].value + '</a>' );
				}
			} else {
				results_box.addClass( 'hide' );
			}

			$( '.js-auto-complete-result' ).click( function ( e ) {
				var clicked = $( this ),
					results_box = clicked.parent(),
					field = results_box.parent().find( '.js-cities-auto-complete' ),
					area_codes_box = clicked.closest( 'tr' ).find( '.js-area-codes' ),
					area_codes = clicked.attr( 'data-areacodes' );

				e.preventDefault();

				results_box
					.text( '' )
					.addClass( 'hide' );

				field.val( clicked.text().toLowerCase() );

				area_codes = area_codes.split( ',' );
				area_codes_box.text( '' );

				for ( var i = 0; i < area_codes.length; i++ ) {
					area_codes_box.append( '<option value="' + area_codes[ i ] + '">' + area_codes[ i ] + '</option>' );
				}
			});
		});

		$( '.js-cities-auto-complete' ).blur( function () {
			var field = $( this );

			if ( !self.callingCityCheck( field ) ) {
				field.val( '' );
			}
		});

		$( '.advanced_search_table input, .advanced_search_table select' )
			.keyup( function () {
				self.validateSearchForm();
			}).change( function () {
				self.validateSearchForm();
			});

		$( '.js-loading' ).click( function () {
			var self = this,
				content = $( '.js-loaded-content' ),
				spinner = $( '.js-loading-spinner' );

			content.addClass( 'hide' );
			spinner.removeClass( 'hide' );

			setTimeout( function () {
				content.removeClass( 'hide' );
				spinner.addClass( 'hide' );
			}, 5000);
		});

		// $( '.upgrades_subscriber input[type=checkbox]' ).click( function () {
		// 	var action_buttons = $( '.operations .frg-button' ),
		// 		checkboxes = $( 'input[type=checkbox]' ),
		// 		enable = false;

		// 	checkboxes.each( function () {
		// 		var checkbox = $( this );

		// 		if ( checkbox.is( ':checked' ) ) {
		// 			enable = true;
		// 		}
		// 	});

		// 	if ( enable ) {
		// 		action_buttons.removeClass( 'state-disabled' );
		// 	} else {
		// 		action_buttons.addClass( 'state-disabled' );
		// 	}
		// });

		$( '.js-phone_input_mask' ).keyup( function () {
			var clicked = $( this ),
				buttons = $( '.js-validated_options' );

			if ( $( this ).val().indexOf( '_' ) === -1 ) {
				buttons.removeClass( 'state-disabled' );
			} else {
				buttons.addClass( 'state-disabled' );
			}
		});

		// TODO: add select / deselect all functionality
		// $( '.js-check-all' ).click( function () {
		// 	var clicked = $( this ),
		// 		checkboxes = $( '.frg-checkbox' );

		// 	if ( clicked.is( ':checked' ) ) {
		// 		checkboxes
		// 			.find( '.frg-icon' )
		// 			.addClass( 'icon-checkmark' );
		// 	} else {
		// 		checkboxes
		// 			.find( '.frg-icon' )
		// 			.removeClass( 'icon-checkmark' );
		// 	}
		// });

		// self.showFakeLinks();

		// $( '.js-upgrade-offer' ).change( function () {
		// 	var dropdown = $( this ),
		// 		status = dropdown.closest( 'tr' ).find( '.status' );

		// 	if ( dropdown.val().toLowerCase() !== 'select' ) {
		// 		if ( status.text().toLowerCase() !== 'complete' ) {
		// 			status.text( 'Pending device & plan' );
		// 		}
		// 	} else {
		// 		if ( status.text().toLowerCase() !== 'complete' ) {
		// 			status.text( 'Pending upgrade offer' );
		// 		}
		// 	}
		// });

		$( '.js-filter-service-category' ).change( function () {
			var sort_value = $( this ).val(),
				phones = $( '.phone' );

			if ( sort_value.toLowerCase() === 'select' ) {
				phones.each( function () {
					$( this )
						.closest( '.js-element' )
						.removeClass( 'hide' );
				});
			} else {
				phones.each( function () {
					var phone = $( this ),
						parent = phone.closest( '.js-element' ),
						type = phone.attr( 'data-filter' );

					if ( type.indexOf( sort_value ) !== -1 ) {
						parent.removeClass( 'hide' );
					} else {
						parent.addClass( 'hide' );
					}
				});
			}
		});

		$( '.js-not-empty' ).blur( function () {
			var field = $( this );

			if ( field.val() === '' ) {
				field
					.closest( '.status' )
					.removeClass( 'positive' )
					.addClass( 'negative' )
					.find( '.frg-icon' )
					.removeClass( 'icon-checkmark-inverted' )
					.addClass( 'icon-warning-inverted' );

				self.formEntriesValid = false;
			} else {
				field
					.closest( '.status' )
					.removeClass( 'negative' )
					.addClass( 'positive' )
					.find( '.frg-icon' )
					.removeClass( 'icon-warning-inverted' )
					.addClass( 'icon-checkmark-inverted' );

				self.formEntriesValid = true;
			}
		});

		$( '.js-email_validation' ).blur( function () {
			var email = $( this );

			if ( !self.validateEmail( email.val() ) ) {
				email.closest( '.status' )
					.removeClass( 'positive' )
					.addClass( 'negative' )
					.find( '.tooltip_bubble' )
					.text( 'Please, enter a valid email address' );

				email
					.closest( '.status' )
					.find( '.frg-icon' )
					.removeClass( 'icon-checkmark-inverted' )
					.addClass( 'icon-warning-inverted' );

				self.formEntriesValid = false;
			} else {
				email.closest( '.status' )
					.removeClass( 'negative' )
					.addClass( 'positive' );

				email
					.closest( '.status' )
					.find( '.frg-icon' )
					.addClass( 'icon-checkmark-inverted' )
					.removeClass( 'icon-warning-inverted' );

				self.formEntriesValid = true;
			}
		});

		$( '.js-match-validation' ).blur( function () {
			var emails = $( '.js-match-validation' ),
				second_email = $( 'input[name=email2]' );

			if ( $( emails[0] ).val() !== '' && $( emails[1] ).val() !== '' ) {
				if ( $( emails[0] ).val() !== $( emails[1] ).val() ) {
					second_email
						.closest( '.status' )
						.removeClass( 'positive' )
						.addClass( 'negative' )
						.find( '.tooltip_bubble' )
						.text( 'The emails you entered do not match.' )
						.closest( '.status' )
						.find( '.frg-icon' )
						.removeClass( 'icon-checkmark-inverted' )
						.addClass( 'icon-warning-inverted' );

					self.formEntriesValid = false;
				} else {
					second_email
						.closest( '.status' )
						.removeClass( 'negative' )
						.addClass( 'positive' )
						.closest( '.status' )
						.find( '.frg-icon' )
						.addClass( 'icon-checkmark-inverted' )
						.removeClass( 'icon-warning-inverted' );

					self.formEntriesValid = true;
				}
			}
		});

		$( '.js-required' ).keyup( function ( e ) {
			self.checkRequiredField( e );
		}).change( function ( e ) {
			self.checkRequiredField( e );
		});

		$( '.js-more' ).click( function () {
			var container = $( '.dep_accounts' );

			container.append( '<div class="row lenght70 top_margin20"><div class="col-xs-6"><label class="block devil_gray_text">DEP number</label><input class="frg-input-field full_width" /></div><div class="col-xs-6"><label class="block devil_gray_text">Description</label><input class="frg-input-field full_width" /></div></div>' );
		});


		$( '.frg-checkbox.js-pricepoint' ).click( function () {
			var clicked = $( this ),
				stuff_to_hide = $( '.js-hide-not-device-only' ),
				stuff_to_show = $( '.js-show-not-device-only' ),
				changeling = $( '.changeling' ),
				hidden_required_stuff = stuff_to_hide.find( '.js-required' );

			if ( clicked.hasClass( 'js-device-only' ) ) {
				stuff_to_hide.hide();
				stuff_to_show.removeClass( 'hide' );

				changeling
					.removeClass( 'halfwidth' )
					.addClass( 'full_width' );

				hidden_required_stuff
					.removeClass( 'js-required' )
					.addClass( 'js-required-hold' );
			} else {
				stuff_to_hide.show();
				stuff_to_show.addClass( 'hide' );

				changeling
					.removeClass( 'full_width' )
					.addClass( 'halfwidth' );

				hidden_required_stuff
					.addClass( 'js-required' )
					.removeClass( 'js-required-hold' );
			}
		});

		$( '.js-incomplete' ).click( function ( e ) {
			var el = $( this ),
				type = 'error',
				title = 'Highlighted fields are required.',
				text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla scelerisque mi, eget commodo justo euismod eu. Mauris nec scelerisque tortor, vel volutpat sapien.',
				errors = $( '.error_message' ),
				error_container = $( '.error_message_container' ),
				required_fields = $( '.js-required' );

			if ( el.hasClass( 'js-incomplete' ) && error_container.length !== 0 && required_fields.length !== 0 ) {
				e.preventDefault();

				if ( errors.length === 0 ) {
					self.checkRequiredField( e )
						.displayErrorMessage( type, title, text )
						.scrollTo( error_container, 15, 1000 );
				} else {
					self.scrollTo( error_container, 15, 1000 );
				}
			}
		});

		$( '.js-select-at-least-one' ).click( function () {
			var checkboxes = $( '.js-select-at-least-one' ),
				submitButton = $( '.js-submit' ),
				activate = false;

			checkboxes.each( function () {
				var checkbox = $( this );

				if ( checkbox.find( '.frg-icon' ).hasClass( 'icon-checkmark' ) ) {
					activate = true;
				}
			});

			if ( activate ) {
				submitButton.removeClass( 'state-disabled' );
			} else {
				submitButton.addClass( 'state-disabled' );
			}
		});

		$( '.js-delete-row' ).click( function () {
			var checked_checkboxes = $( '.frg-checkbox .icon-checkmark' ),
				rows_to_delete = checked_checkboxes.closest( 'tr' ),
				next_row = rows_to_delete.next();

			rows_to_delete.remove();
			next_row.remove();
		});

		$( '.js-unique' ).blur( function () {
			self.checkForDuplicates();
		});

		$( '.js-duplicates' ).click( function () {
			var error_container = $( '.error_message_container' ),
				unique_fields = $( '.js-unique' );

			if ( error_container.length !== 0 && unique_fields.length !== 0 ) {
				self.checkForDuplicates();

				if ( $( this ).hasClass( 'js-active' ) ) {
					var duplicates = $( '[data-duplicate=true]' ),
						type = 'error',
						title = "there's duplicates",
						text = 'Lorem ipsum';

					duplicates
						.addClass( 'js-error' )
						.addClass( 'show_errors' );

					self.displayErrorMessage( type, title, text )
						.scrollTo( error_container, 15, 1000 );
				}
			}
		});

		$( '.js-clear-cart' ).click( function () {
			$('#clearCart').modal();
		});

		$( '.js-confirm-clear-cart' ).click( function () {
			console.info( 'clear cart' );
		});

		$( '.js-display-overlay' ).click( function () {
			self.displayOverlay( $( this ) );
		});

		$( '.js-display-spinner' ).click( function () {
              self.start();
        });

        $( '.js-ellipsis' ).click( function () {
        	self.showFullName( $( this ) );
        });

        $( '.js-copy_row input[type=checkbox]' ).click( function () {
        	var checkbox = $( this );

        	if ( checkbox.is( ':checked' ) ) {
        		var td = checkbox.closest( 'td' ),
        			main_dropdown = td.find( '.frg-select-container select' ),
        			main_notes = td.find( '.frg-input-field' ),
        			other_dropdowns = $( '.frg-select-container select' ),
        			other_notes = $( '.frg-input-field' );

        		other_dropdowns.each( function () {
        			$( this ).val( main_dropdown.val() );
        		});

        		other_notes.each( function () {
        			$( this ).val( main_notes.val() );
        		});
        	}
        });

        $( '.search_field' ).keyup( function () {
        	var search_term = $( this ).val(),
        		establishments = $( '.establishment' );

    		establishments.each( function () {
    			var establishment = $( this );

    			if ( establishment.text().toLowerCase().indexOf( search_term ) === -1 ) {
    				establishment
    					.parent()
    					.hide();
    			} else {
    				establishment
    					.parent()
    					.show();	
    			}
    		});

        });

        $( '.jsChangeCategory' ).click( function () {
        	var tab = $( this ),
        		tabs = $( '.jsChangeCategory' ),
        		category = tab.attr( 'data-link' ),
        		categories = $( 'section[data-category]' );

        	if ( !tab.hasClass( 'ctx-active' ) ) {
        		tabs.removeClass( 'ctx-active' );
        		tab.addClass( 'ctx-active' );
        	}

        	categories.hide();

        	$( 'section[data-category=' + category + ']' ).show();
        });

		return self;
	},

	start: function () {
		var self = this;

		self.target2 = $( '.spinner2' ).get( 0 );
		self.spinner2 = new Spinner( self.opts2 ).spin( self.target2 );
		self.showOverlay();

		return self;
	},

	stop: function () {
		var self = this;

		self
			.hideOverlay()
			.spinner2
			.stop();

		return self;
	},

	showOverlay: function () {
		var self = this;

		$.LoadingOverlay( "show" );

		return self;
	},

	hideOverlay: function () {
		var self = this;

		$.LoadingOverlay( "hide" );

		return self;
	},

	startSpinner: function () {
		var self = this;

		$.LoadingOverlay( "show" );

		return self;
	},

	stopSpinner: function () {
		var self = this;

		$.LoadingOverlay( "hide" );

		return self;
	},

	selectCheckbox: function ( action, checkbox ) {
		if ( action === 'select' ) {
			checkbox
				.find( 'input[type=checkbox]' )
				.prop( 'checked', true )
				.closest( '.inner' )
				.find( '.frg-icon' )
				.addClass( 'icon-checkmark' );
		} else if ( action === 'deselect' ) {
			checkbox
				.find( 'input[type=checkbox]' )
				.prop( 'checked', false )
				.closest( '.inner' )
				.find( '.frg-icon' )
				.removeClass( 'icon-checkmark' );
		}
	},

	scrollTo: function ( el, margin, time ) {
		$( 'html, body' ).animate({
	        scrollTop: el.offset().top - margin
	    }, time );
	},

	checkForDuplicates: function () {
		var self = this,
			textfields = $( '.js-unique' ),
			submit_btn = $( '.frg-button' ),
			duplicates = false,
			index_a = 0;

		textfields.removeAttr( 'data-duplicate' );

		textfields.each( function () {
			var textfield1 = $( this ),
				matches = 0,
				index_b = 0;

			textfields.each( function () {
				var textfield2 = $( this );

				if ( textfield1.val() !== '' && textfield2.val() !== '' && textfield1.val() === textfield2.val() && index_a !== index_b ) {
					matches++;

					textfield1.attr( 'data-duplicate', 'true' );
					textfield2.attr( 'data-duplicate', 'true' );
				}

				index_b++;
			});

			index_a++;

			if ( matches > 0 ) {
				duplicates = true;
			}
		});

		if ( duplicates ) {
			submit_btn.addClass( 'js-active' );
		} else {
			submit_btn.removeClass( 'js-active' );
		}

		return self;
	},

	checkRequiredField: function ( el ) {
		var self = this,
			form = ( $( el.target ).closest( '.js-all-required-fields' ).length > 0 ) ? $( el.target ).closest( '.js-all-required-fields' ) : $( '.js-all-required-fields' ),
			disable = form.hasClass( 'disable' ),
			fields = form.find( '.js-required' ),
			button = form.find( '.js-submit' ),
			valid = true,
			radios = form.find( 'input[type=radio].js-required' ),
			radios_valid = ( radios.length > 0 ) ? false : true,
			errors = $( '.error_message_container' );

		errors.empty();

		fields.removeClass( 'js-error' ).removeClass( 'show_errors' ).each( function () {
			var field = $( this );

			radios.each( function () {
				var radio_name = $( this ).attr( 'name' ),
					all_radios_by_that_name = form.find( 'input[name=' + radio_name + ']' ),
					radio_set_valid = false;

				all_radios_by_that_name.each( function () {
					if ( $( this ).is( ':checked' ) ) {
						radio_set_valid = true;
					}
				});

				if ( !radio_set_valid ) {
					all_radios_by_that_name.addClass( 'js-error' );
					radios_valid = false;
				}
			});

			if ( field.val() === null || field.val() === '' || field.val().toLowerCase().indexOf( 'select' ) !== -1  || field.val().indexOf( '_' ) !== -1 ) {
				valid = false;
				field.addClass( 'js-error' );
			} else if ( field.hasClass( 'js-quantity' ) && field.parent().hasClass( 'status' ) && field.parent().hasClass( 'negative' ) ) {
				valid = false;
				field.addClass( 'js-error' );
			}
		});

		if ( !( valid && radios_valid && self.formEntriesValid ) ) {
			if ( disable ) {
				button.addClass( 'state-disabled' );
			} else {
				button.addClass( 'js-incomplete' );
			}
		} else {
			if ( disable ) {
				button.removeClass( 'state-disabled' );
			} else {
				button.removeClass( 'js-incomplete' );
			}

			errors.empty();
		}

		return self;
	},

	validateSearchForm: function () {
		var fields = $( '.advanced_search_table input, .advanced_search_table select' ),
			validated_fields = $( '.advanced_search_table .status' ),
			search = $( '.advanced_search_table .frg-button' ),
			valid = false;

		fields.each( function () {
			if ( $( this ).val() !== '' && $( this ).val() !== 'Select' ) {
				valid = true;
			}
		});

		validated_fields.each( function () {
			if ( $( this ).hasClass( 'negative' ) ) {
				valid = false;
			}
		});

		if ( !valid ) {
			search.addClass( 'state-disabled' );
		} else {
			search.removeClass( 'state-disabled' );
		}
	},

	portabilityCheck: function () {
		// TODO: put in real code to make ajax call for portability check
		return false;
	},

	callingCityCheck: function ( el ) {
		var self = this,
			el_text = el.val();

 		for ( var i = 0; i < self.cities.length; i++ ) {
			if ( el_text.toLowerCase() === self.cities[ i ].value.toLowerCase() ) {
				return true;
			}
		}

		return false;
	},

	autoSave: function ( e ) {
		var textbox = $( this ),
			value = textbox.val(),
			closest = textbox.closest( 'p' ),
			edit_name = closest.find( '.edit_name' ),
			title = closest.find( 'span, strong' ),
			code = e.which || e.keyCode;

		if ( ( code == 13 || code == 9 ) && value !== '' ) {
			textbox.addClass( 'hide' );
			edit_name.removeClass( 'hide' );
			title.text( value ).removeClass( 'hide' );
		}
	},

	formCompleted: function () {
		var fields = $( '.js-form-complete' ),
			text_form_completed = true,
			radio_form_completed = false,
			save_continue = $( '.frg-button' );

		fields.each( function () {
			var field = $( this );

			if ( field.attr( 'type' ) === 'text' ) {
				if ( field.val() === '' || field.val().indexOf( '_' ) !== -1 ) {
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

			if ( self.currentPage === 'plans' || self.currentPage === 'devices' || self.currentPage === 'upgrades_devices' || self.currentPage === 'upgrades_plans' ) {
				items.closest( '.js-element' ).show();
			} else {
				items.show();
			}

			applied_filter.text( applied_filter_text );

			items.each( function () {
				var item = $( this );

				if ( filter_text === 'all' ) {
					if ( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) !== -1 ) {
						if ( self.currentPage === 'plans' || self.currentPage === 'devices' || self.currentPage === 'upgrades_devices' || self.currentPage === 'upgrades_plans' ) {
							item.closest( '.js-element' ).show();
						} else {
							item.show();
						}
					} else if( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) === -1 ) {
						if ( self.currentPage === 'plans' || self.currentPage === 'devices' || self.currentPage === 'upgrades_devices' || self.currentPage === 'upgrades_plans' ) {
							item.closest( '.js-element' ).hide();
						} else {
							item.hide();
						}
					} else if ( second_filter_text === null ) {
						if ( self.currentPage === 'plans' || self.currentPage === 'devices' || self.currentPage === 'upgrades_devices' || self.currentPage === 'upgrades_plans' ) {
							item.closest( '.js-element' ).show();
						} else {
							item.show();
						}
					}
				} else if ( item.attr( 'data-filter' ).indexOf( filter_text ) === -1 || ( second_filter_text !== null && item.attr( 'data-filter' ).indexOf( second_filter_text ) === -1 ) ) {
					if ( self.currentPage === 'plans' || self.currentPage === 'devices' || self.currentPage === 'upgrades_devices' || self.currentPage === 'upgrades_plans' ) {
						item.closest( '.js-element' ).hide();
					} else {
						item.hide();
					}
				}
			});

			if ( self.currentPage === 'accessories' ) {
				self.rearrangeSeparators();
			}
		});

		return self;
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
            return ( a[ field ].toLowerCase() == b[ field ].toLowerCase() ) ? 0 : ( ( a[ field ].toLowerCase() > b[ field ].toLowerCase() ) ? direction : -1 * direction );
        });

        // replace existing rows with new rows created from the sorted array
        for ( i = 0; i < rlen; i++ ) {
            rows[ i ].innerHTML = "<td>" + arr[ i ].join( "</td><td>" ) + "</td>";
        }
	},

	displayErrorMessage: function ( type, title, text ) {
		var self = this,
			error_container = $( '.error_message_container' ),
			errors = $( '.js-error' ),
			icon = null;

		switch ( type ) {
			case 'error' 	:
			case 'warning' 	: 	icon = 'icon-warning-inverted';
								break;
		}

		error_container.append( '<div class="error_message bottom_margin20 ' + type + ' clearfix"><a class="close right" href="#"><span class="frg-icon icon-x-circled"></span></a><div class="content clearfix"><div class="frg-icon ' + icon + ' left"></div><div class="text left"><div class="h3 title"><strong>' + title + '</strong></div><span class="text hide">' + text + '</span></div></div></div>' );
		errors.addClass( 'show_errors' );

		$( '.error_message .close' ).click( function () {
			$( this ).closest( '.error_message' ).fadeOut();
		});

		return self;
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
					listing += '				<span class="time_period">3-year term</span>';
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
		var self = this;

		$( '.device-color-button' ).click( function () {
			var clicked = $( this ),
				phoneId = clicked.attr( 'data-sku' ),
				image = clicked.closest( '.image, .object' ),
				matchingVariant = image.find( '.js-' + phoneId ),
				allVariants = image.find( 'img' );

			allVariants.addClass( 'hide' );
			matchingVariant.removeClass( 'hide' );
		});

		return self;
	},

	setupPagination: function () {
		var self = this,
			display = $( '.paging_display' ),
			from_txt = display.find( '.from' ),
			to_txt = display.find( '.to' ),
			next = $( '.js-next' ),
			remainder = null,
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
		remainder = ( parseInt( total.text() ) - parseInt( to_txt.text() ) > 10 ) ? 10 : parseInt( total.text() ) - parseInt( to_txt.text() );

		if ( remainder > 0 ) {
			next.text( 'Next ' + remainder );
		} else {
			next.text( ' - ' );
		}

		return self;
	},

	ellipsis: function () {
		var self = this,
			string = $( '.js-ellipsis' );

		string.each( function () {
			var str = $( this ),
				str_text = str.text().trim(),
				len = str.attr( 'data-maxlen' );

			if ( str_text.length > len ) {
				str.text( str_text.substr( 0, parseInt( len ) - 3 ) + '...' );
			}
		});

		return self;
	},

	showFullName: function ( str ) {
		var self = this,
			full = str.attr( 'fullname' );

		str.text( full );

		return self;
	},

	setupDueNow: function () {
		var self = this,
			base_total = parseInt( $( '[name=base_total]' ).val() ),
			sims = $( '.sim select' ),
			sims_total = 0,
			due_now_total = base_total,
			due_now = $( 'p.now' );

		sims.each( function () {
			sims_total += parseInt( $( this ).val() );
		});

		if ( $.isNumeric( base_total ) && $.isNumeric( sims_total ) ) {
			due_now.text( self.currencyFormat( base_total + sims_total ) );
		}

		return self;
	},

	currencyFormat: function ( value ) {
		return '$' + parseFloat( value, 10 ).toFixed( 2 ).replace( /(\d)(?=(\d{3})+\.)/g, "$1," ).toString();
	},

	validateEmail: function ( email ) {
		var patt = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

		return patt.test( email );
	},

	setupInputMasks: function () {
		var self = this;

		$.mask.definitions['~']='[+-]';

		$( '.js-phone_input_mask' ).mask( '?(999) 999-9999' );
		$( '.js-postalcode_input_mask' ).mask( 'a9a 9a9' );

		return self;
	},

	displayOverlay: function ( el ) {
		var self = this;

		self.start();

		$.ajax().done( function ( data ) {
			var bottom_section = el.closest( '.bottom_section' ),
				quantity = bottom_section.find( '.js-quantity' ).val();

			if ( $.isNumeric( quantity ) && quantity > 0 ) {
				el
				.addClass( 'current' )
				.addClass( 'added' )
				.text( 'Update' );
			} else if ( $.isNumeric( quantity ) && quantity == 0 ) {
				el
				.removeClass( 'current' )
				.removeClass( 'added' )
				.text( 'Add to cart' );
			}

			self.stop();
		});

		return self;
	},

	check_image_availability: function () {
		var self = this,
			images = $( '.js-check-availability' ),
			default_img = 'img/no-image-available.jpg';

		images.each( function () {
			var img = $( this );

			$.get( img.attr( 'src' ) ).fail(function() {
				img.attr( 'src', default_img ).addClass( 'replacement_img' );
			});
		});

		return self;
	}
};