(function($){ 
	var CarouselEvo, carouselevo, 
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
	var $ = jQuery;
	
	
	CarouselEvo=( function(){ 
		function CarouselEvo() {
		  this.setInitOption = __bind(this.setInitOption, this);  
		  this.change_offset= 40;
		  this.settings = {};
		  this.self=this
		  this.element=null;
		  this.carousel= null;	
		  this.currentSlide=0;
		  this.targetSlide=0
		  this.numberSlides=0;
		  this.isAnimationRunning=false
		  this.pause=true;	
		  this.self=this;
		  this.autoplay = false;
		  this.current=0;	
		  this.length=0;		
		  this.CarouselEvo_index=0;
		  this.data = {
				settings:{},
				element: '',
				options: {}
			  };
		  this.globalContext = {};
		  
		};
		
		CarouselEvo.prototype.setInitOption = function(elementObj,options,index){
			this.settings = jQuery.extend({},jQuery.fn.carousel.defaults,options);
			this.self=this
			this.element=jQuery(elementObj);
			this.carousel= this.element.children('.slides');
			this.carousel.children('div').addClass('slideItem');
			this.slideItems=this.carousel.children('.slideItem');
			for(var i=0 ; i<this.slideItems.length ; i++){
				$(this.slideItems[i]).attr("data-Carousel-index",index);
			}
			this.slideImage=this.slideItems.find('img');			
			this.numberSlides=this.slideItems.length;
			this.length=this.numberSlides;
			this.current=this.currentSlide;
			this.CarouselEvo_index = index;
			this.init();
		};
		
		
		CarouselEvo.prototype.init=function(){ 
			var o=this.settings;this.initSlides();
			if(o.directionNav==true){ 
				this.initDirectionButton(); 
			}
			if(o.userNavigation!=null && o.userNavigation.prevEl !=null){
				this.initUserDirectionButton();
			}
			if(o.buttonNav!='none'){ 
				this.initButtonNav(); 
			}
			if(o.reflection==true){ 
				this.initReflection(); 
			}
			if(o.shadow==true){ 
				this.initShadow(); 
			}
			if(o.description==true){ 
				this.initDesc(); 
			}
			if(o.autoplay==true){ 
				this.runAutoplay(); 
			}
		};

		CarouselEvo.prototype.setImageSize=function(p){ 
			var o=this.settings,n=this.numberSlides,w=o.frontWidth,h=o.frontHeight,ret;
			if(p!=0){ 
				if(o.hAlign=='center'){ 
					if(p>0&&p<=Math.ceil((n-1)/2)){ 
						var front=this.setImageSize(p-1);w=o.backZoom*front.width;h=o.backZoom*front.height; 
					}
					else{ 
						var sz=this.setImageSize(n-p);w=sz.width;h=sz.height; 
					} 
				}
				else{ 
					if(p==(n-1)){ 
						w=o.frontWidth/o.backZoom;h=o.frontHeight/o.backZoom; 
					}
					else{ 
						var front=this.setImageSize(p-1);w=o.backZoom*front.width;h=o.backZoom*front.height; 
					} 
				} 
			}
			return ret={ 
			width:w,height:h 
			}; 
		};
		CarouselEvo.prototype.setSlideSize=function(p){ 
			var o=this.settings,n=this.numberSlides,w=o.frontWidth,h=o.frontHeight+this.reflectionHeight(p)+this.shadowHeight(p),ret;
			if(p!=0){ 
				if(o.hAlign=='center'){ 
					
					if(p>0&&p<=Math.ceil((n-1)/2)){ 
						var front=this.setImageSize(p-1);w=o.backZoom*front.width;h=(o.backZoom*front.height)+this.reflectionHeight(p)+this.shadowHeight(p); 					
					}
					else{ 
						var sz=this.setSlideSize(n-p);w=sz.width;h=sz.height; 
					} 
					
				}
				else{ 
					if(p==(n-1)){ 
						w=o.frontWidth/o.backZoom;h=(o.frontHeight/o.backZoom)+this.reflectionHeight(p)+this.shadowHeight(p); 
					}
					else{ 
						var front=this.setImageSize(p-1);w=o.backZoom*front.width;h=(o.backZoom*front.height)+this.reflectionHeight(p)+this.shadowHeight(p); 
					} 
				} 
			}
			return ret={ 
							width:w,height:h 
						}; 
		};
		CarouselEvo.prototype.getMargin=function(p){ 
			var o=this.settings,vm,hm,ret,iz=this.setImageSize(p);vm=iz.height*o.vMargin;hm=iz.width*o.hMargin;
			return ret={ 
					vMargin:vm,hMargin:hm 
				}; 
		};
		CarouselEvo.prototype.centerPos=function(p){ 
			var o=this.settings,c=topPos(p-1)+(this.setImageSize(p-1).height-this.setImageSize(p).height)/2;
			if(o.hAlign!='center'){ 
				if(p==(this.numberSlides-1)){ 
					c=o.top-((this.setImageSize(p).height-this.setImageSize(0).height)/2); 
				} 
			}
			return c; 
		};
		CarouselEvo.prototype.topPos=function(p){ 
			var o=this.settings,t=o.top,vm=this.getMargin(p).vMargin,n=this.numberSlides;
			if(o.vAlign=='bottom'){ 
				t=o.bottom; 
			}
			if(p!=0){ 
				if(o.hAlign=='center'){
					if(p>0){
						if((n-1) == p){
							t = -o.change_offset;
						}else{
							t = o.change_offset*(p);
						}
					}else{
						t= 0;
					}
				}
				else{ 
					if(p==(this.numberSlides-1)){ 
						if(o.vAlign=='center'){ 
							t=centerPos(p); 
						}
						else{ 
							t=centerPos(p)-vm; 
						} 
					}
					else{ 
						if(o.vAlign=='center'){ 
							t=centerPos(p); 
						}
						else{ 
							t=centerPos(p)+vm; 
						} 
					} 
				} 
			}
			return t; 
		};
		CarouselEvo.prototype.horizonPos=function(p){ 
			var o=this.settings,n=this.numberSlides,hPos,mod=n%2,endSlide=n/2,hm=this.getMargin(p).hMargin;
			if(p==0){ 
				if(o.hAlign=='center'){ 
					hPos=(o.carouselWidth-o.frontWidth)/2; 
				}
				else{ 
					hPos=o.left;
					if(o.hAlign=='right'){ 
						hPos=o.right; 
					} 
				} 
			}
			else{ 
				if(o.hAlign=='center'){ 
					if(p>0){
						
						if((n-1) == p){
							hPos=this.horizonPos(0)+o.change_offset;
						}else{
							hPos=this.horizonPos(p-1)-o.change_offset;
						}
						
						if(mod==0){ 
							if(p==endSlide){ 
								hPos=(o.carouselWidth-this.setSlideSize(p).width)/5; 
							} 
						} 
					}
					else{ 
						hPos=o.carouselWidth-this.horizonPos(n-p)-this.setSlideSize(p).width; 
					} 
				}
				else{ 
					if(p==(n-1)){ 
						hPos=this.horizonPos(0)-(this.setSlideSize(p).width-this.setSlideSize(0).width)/5-hm; 
					}
					else{ 
						hPos=this.horizonPos(p-1)+(this.setSlideSize(p-1).width-this.setSlideSize(p).width)/5+hm; 
					} 
				} 
			}
			return hPos; 
		};
		CarouselEvo.prototype.setOpacity=function(p){ 
			var o=this.settings,n=this.numberSlides,opc=1,hiddenSlide=n-o.slidesPerScroll;
			if(hiddenSlide<2){ 
				hiddenSlide=2; 
			}
			
			if(o.hAlign=='center'){ 
				if(p==0){ 
					opc=1; 
				}else{ 
					if(p==1){
						opc=o.backOpacity;
					}else{
						opc=0; 
					}
				}
			}
			else{ 
				if(p==0){ 
					opc=1; 
				}
				else{ 
					opc=o.backOpacity;
					if(!(p<(n-hiddenSlide))){ 
						opc=0; 
					} 
				} 
			}
			return opc; 
		};
		CarouselEvo.prototype.setSlidePosition=function(p){ 
			var pos=new Array(),o=this.settings,n=this.numberSlides;
			var shadowStr = '10px 10px 10px rgba(0, 0, 0, 0.1)';
			for(var i=0;i<n;i++){ 
				var sz=this.setSlideSize(i);
				if(o.hAlign=='left'){ 
					pos[i]={ 
						width:sz.width,height:sz.height,top:this.topPos(i),left:this.horizonPos(i),opacity:this.setOpacity(i),boxShadow:shadowStr
					};
					if(o.vAlign=='bottom'){ 
						pos[i]={ 
							width:sz.width,height:sz.height,bottom:this.topPos(i),left:this.horizonPos(i),opacity:this.setOpacity(i),boxShadow:shadowStr
						}; 
					} 
				}
				else{ 
					pos[i]={ 
						width:sz.width,height:sz.height,top:this.topPos(i),right:this.horizonPos(i),opacity:this.setOpacity(i),boxShadow:shadowStr
					};
					if(o.vAlign=='bottom'){ 
						pos[i]={ 
							width:sz.width,height:sz.height,bottom:this.topPos(i),right:this.horizonPos(i),opacity:this.setOpacity(i),boxShadow:shadowStr
						}; 
					} 
				} 
			}
			return pos[p]; 
		};
		CarouselEvo.prototype.slidePos=function(i){ 
			var cs=this.currentSlide,pos=i-cs;
			if(i<cs){ 
			pos+=this.numberSlides; 
			}
			return pos; 
		};
		CarouselEvo.prototype.zIndex=function(i){ 
			var z,n=this.numberSlides,hAlign=this.settings.hAlign;
			if(hAlign=='left'||hAlign=='right'){ 
			if(i==(n-1)){ 
			z=n-1; 
			}
			else{ 
			z=n-(2+i); 
			} 
			}
			else{ 
			if(i>=0&&i<=((n-1)/2)){ 
			z=(n-1)-i; 
			}
			else{ 
			z=i-1; 
			} 
			}
			return z; 
		};
		CarouselEvo.prototype.slidesMouseOver=function(event,settings){ 
			var o=this.settings,self=this;
			if(o.autoplay==true&&o.pauseOnHover==true){self.stopAutoplay();}};
		CarouselEvo.prototype.slidesMouseOut=function(event,settings){ 
			var o=this.settings,self=this;
			if(o.autoplay==true&&o.pauseOnHover==true){if(pause==true){self.runAutoplay();}} 
		};
		CarouselEvo.prototype.initSlides=function(){ 
			var self=this;o=this.settings,n=this.numberSlides,images=this.slideImage;self=this,movetoIndex=this.goto,this.carousel.css({ 
			'width':o.carouselWidth+'px','height':o.carouselHeight+'px' 
			}).bind('mouseover',
					function(event){ 
						if(o.autoplay==true&&o.pauseOnHover==true){
							self.stopAutoplay();
						 }
					}).bind('mouseout',
							function(event){
								if(o.autoplay==true&&o.pauseOnHover==true){
									if(self.pause==true){
										self.runAutoplay();
									}
								}
							});
			for(var i=0;i<n;i++){ 
				var item=this.slideItems.eq(i);
				item.Carousel = this;
				item.css(this.setSlidePosition(this.slidePos(i))).bind('click',
					function(event){
						var slideObj= $(event.currentTarget);
						var carousel_index = slideObj.attr("data-Carousel-index");
						var carousel = slideObj.getCarousel(carousel_index);						 
						if( slideObj.index()!= carousel.currentSlide){ 
							carousel.goTo(slideObj.index());
							return false; 
						}else{
							carousel.goTo(slideObj.index()-1);
						}
					}				
				);
				this.slideItems.eq(this.slidePos(i)).css({	'z-index':this.zIndex(i) 
				});
				images.eq(i).css(this.setImageSize(this.slidePos(i)));
				var op=item.css('opacity');
				if(op==0){ 
					item.hide(); 
				}
				else{ 
					item.show(); 
				} 
			}
			if(o.mouse==true){ 
				this.carousel.mousewheel(function(event,delta){ 
									if(delta>0){ 
										self.goTo(self.currentSlide-1,true,false);
										return false; 
									}
									else if(delta<0){ 
										self.goTo(self.currentSlide+1,true,false);
										return false; 
									} 
				});
		 
			} 
		};
		CarouselEvo.prototype.hideItem=function(slide){ 
			var op=slide.css('opacity');
			if(op==0){ 
			slide.hide(); 
			} 
		};
		CarouselEvo.prototype.goTo=function(index,isStopAutoplay,isPause){ 
			if(this.isAnimationRunning==true){ 
			return; 
			}
			var o=this.settings,n=this.numberSlides;
			if(isStopAutoplay==true){ 
			this.stopAutoplay(); 
			}
			this.targetSlide=index;
			if(this.targetSlide==n){ 
			this.targetSlide=0; 
			}
			if(this.targetSlide==-1){ 
			this.targetSlide=n-1; 
			}
			o.before(self);this.animateSlide();pause=isPause; 
		};
		CarouselEvo.prototype.animateSlide=function(){ 
			var o=this.settings,n=this.numberSlides;
			if(this.isAnimationRunning==true){ 
				return; 
			}
			if(this.currentSlide==this.targetSlide){ 
				this.isAnimationRunning=false;
				return; 
			}			
			this.isAnimationRunning=true;
			this.hideDesc(this.currentSlide);
			if(this.currentSlide>this.targetSlide){ 
				var forward=n-this.currentSlide+this.targetSlide,backward=this.currentSlide-this.targetSlide; 
			}
			else{ 
				var forward=this.targetSlide-this.currentSlide,backward=this.currentSlide+n-this.targetSlide; 
			}
			if(forward>backward){ 
				dir=-1; 
			}
			else{ 
				dir=1; 
			}
			this.currentSlide+=dir;
			if(this.currentSlide==n){ 
				this.currentSlide=0; 
			}
			if(this.currentSlide==-1){ 
				this.currentSlide=n-1; 
			}
			this.hideVideoOverlay();this.buttonNavState();this.showDesc(this.currentSlide);
			for(var i=0;i<n;i++){ 
				this.animateImage(i); 
			} 
		};
		CarouselEvo.prototype.animateImage=function(i){ 
			var o=this.settings,item=this.slideItems.eq(i),pos=this.slidePos(i),self=this;
			
			item.show();
			item.animate(this.setSlidePosition(pos),o.speed,'linear',
			function(event){ 
				self.hideItem($(this));
				if(i==self.numberSlides-1){ 
					self.isAnimationRunning=false;
					if(self.currentSlide!=self.targetSlide){ 
						self.animateSlide(); 
					}
					else{ 
						self.current=self.currentSlide;
						self.showVideoOverlay(self.currentSlide);
						o.after(self); 
					} 
				} 
			});
			item.css({ 
				'z-index':this.zIndex(pos) 
			});
			this.slideImage.eq(i).animate(this.setImageSize(pos),o.speed,'linear');
			if(o.reflection==true){ 
			animateReflection(o,item,i); 
			}
			if(o.shadow==true){ 
			animateShadow(o,item,i); 
			} 
		};
		CarouselEvo.prototype.slideClick=function(event){ 
			var $this=$(this);
			if($this.index()!=this.currentSlide){ 
			this.goTo($this.index(),true,false);
			return false; 
			} 
		};
		CarouselEvo.prototype.reflectionHeight=function(p){ 
			var h=0,o=this.settings;
			if(o.reflection==true){ 
			h=o.reflectionHeight*this.setImageSize(p).height; 
			}
			return h; 
		};
		CarouselEvo.prototype.initReflection=function(){ 
			var o=this.settings,items=this.slideItems,images=this.slideImage,n=this.numberSlides,opc=o.reflectionOpacity,start='rgba('+o.reflectionColor+','+opc+')',end='rgba('+o.reflectionColor+',1)';
			var style='<style type="text/css">';
			style+='.slideItem .gradient {';
			style+='position:absolute; left:0; top:0; margin:0; padding:0; border:none; width:100%; height:100%; ';
			style+='background: -moz-linear-gradient('+start+','+end+'); ';
			style+='background: -o-linear-gradient('+start+','+end+'); ';
			style+='background: -webkit-linear-gradient('+start+','+end+'); ';
			style+='background: -webkit-gradient(linear, 0% 0%, 0% 100%, from('+start+'), to('+end+')); ';
			style+='background: linear-gradient('+start+','+end+'); ';
			style+='} ';
			style+='.slideItem .reflection {';
			style+='filter: progid:DXImageTransform.Microsoft.Alpha(style=1,opacity='+(opc*100)+',finishOpacity=0,startX=0,finishX=0,startY=0,finishY=100)';
			style+='-ms-filter: progid:DXImageTransform.Microsoft.Alpha(style=1,opacity='+(opc*100)+',finishOpacity=0,startX=0,finishX=0,startY=0,finishY=100)';
			style+='}';
			style+='</style>';
			$(style).appendTo('head');
			for(var i=0;i<n;i++){ 
				var src=images.eq(i).attr('src'),sz=this.setImageSize(i);
				$('<div class="reflection"></div>').css({'position':'absolute','margin':'0','padding':'0','border':'none','overflow':'hidden','left':'0','top':this.setImageSize(i).height+'px','width':'100%','height':this.reflectionHeight(i)}).appendTo(items.eq(i)).append($('<img src="'+src+'" />').css({'width':sz.width+'px','height':sz.height+'px','left':'0','margin':'0','padding':'0','border':'none','-moz-transform':'rotate(180deg) scale(-1,1)','-webkit-transform':'rotate(180deg) scale(-1,1)','-o-transform':'rotate(180deg) scale(-1,1)','transform':'rotate(180deg) scale(-1,1)','filter':'progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)','-ms-filter':'progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)'})).append('<div class="gradient"></div>'); 
			} 
		};
		CarouselEvo.prototype.animateReflection=function(option,item,i){ 
			var ref=item.children('.reflection'),speed=option.speed,sz=this.setImageSize(slidePos(i));
			ref.animate({ 
				'top':sz.height+'px','height':this.reflectionHeight(slidePos(i)) 
				},speed,'linear');
			ref.children('img').animate(sz,speed,'linear'); 
		};
		CarouselEvo.prototype.shadowHeight=function(p){ 
			var sh=0;
			if(this.settings.shadow==true){ 
				sh=0.1*this.setImageSize(p).height; 
			}
			return sh; 
		};
		CarouselEvo.prototype.shadowMiddleWidth=function(p){ 
			var w,s=this.slideItems.eq(p).find('.shadow'),sL=s.children('.shadowLeft'),sR=s.children('.shadowRight'),sM=s.children('.shadowMiddle');
			return w=this.setImageSize(p).width-(sL.width()+sR.width()); 
		};
		CarouselEvo.prototype.initShadow=function(){ 
			var items=this.slideItems,n=this.numberSlides,sWidth=this.setImageSize(0).width,sInner='<div class="shadowLeft"></div><div class="shadowMiddle"></div><div class="shadowRight"></div>';
			if(this.settings.hAlign!='center'){ 
				sWidth=this.setImageSize(n-1).width; 
			}
			for(var i=0;i<n;i++){ 
				var item=items.eq(i);
				$('<div class="shadow"></div>').css({'width':sWidth+'px','z-index':'-1','position':'absolute','margin':'0','padding':'0','border':'none','overflow':'hidden','left':'0','bottom':'0'}).append(sInner).appendTo(item).children('div').css({ 
				'position':'relative','float':'left'});
		item.find('.shadow').children('.shadowMiddle').width(shadowMiddleWidth(i)); 
			} 
		};
		CarouselEvo.prototype.animateShadow=function(option,item,i){ 
			item.find('.shadow').children('.shadowMiddle').animate({ 
				'width':shadowMiddleWidth(slidePos(i))+'px' 
			},option.speed,'linear'); 
		};
		CarouselEvo.prototype.initUserDirectionButton=function(){ 
			var o=this.settings,self=this;	
			if(o.userNavigation.prevEl){
					self.element.find(o.userNavigation.prevEl).bind('click',function(event){ 
						self.goTo(self.currentSlide-1,true,false); 
				}); 
			}
			if(o.userNavigation.nextEl){
					self.element.find(o.userNavigation.nextEl).bind('click',function(event){ 					
						self.goTo(self.currentSlide+1,true,false);
				}); 
			}
		};
		CarouselEvo.prototype.initDirectionButton=function(){ 	
			var el=element;el.append('<div class="nextButton"></div><div class="prevButton"></div>');el.children('.nextButton').bind('click',
			function(event){ 
				this.goTo(this.currentSlide+1,true,false); 
			});
			el.children('.prevButton').bind('click',
			function(event){ 
				this.goTo(this.currentSlide-1,true,false); 
			}); 
		};
		CarouselEvo.prototype.initButtonNav=function(){ 
			var el=element,n=this.numberSlides,buttonName='bullet',activeClass='bulletActive';
			if(this.settings.buttonNav=='numbers'){ 
				buttonName='numbers';activeClass='numberActive'; 
			}
			el.append('<div class="buttonNav"></div>');
			var buttonNav=el.children('.buttonNav');
			for(var i=0;i<n;i++){ 
				var number='';
				if(buttonName=='numbers'){ 
					number=i+1; 
				}
				$('<div class="'+buttonName+'">'+number+'</div>').css({ 
					'text-align':'center' 
				}).bind('click',
				function(event){ 
					this.goTo($(this).index(),true,false); 
				}).appendTo(buttonNav); 
			}
			var b=buttonNav.children('.'+buttonName);b.eq(0).addClass(activeClass)
			buttonNav.css({ 
				'width':this.numberSlides*b.outerWidth(true),'height':b.outerHeight(true) 
			});
			 
		};
		CarouselEvo.prototype.buttonNavState=function(){ 
			var o=this.settings,buttonNav=this.element.children('.buttonNav');
			if(o.buttonNav=='numbers'){ 
				var numbers=buttonNav.children('.numbers');numbers.removeClass('numberActive');numbers.eq(this.currentSlide).addClass('numberActive'); 
			}
			else{ 
				var bullet=buttonNav.children('.bullet');bullet.removeClass('bulletActive');bullet.eq(this.currentSlide).addClass('bulletActive'); 
			} 
		};
		CarouselEvo.prototype.initDesc=function(){ 
			var desc=$(this.settings.descriptionContainer),w=desc.width(),h=desc.height(),descItems=desc.children('div'),n=descItems.length;
			for(var i=0;i<n;i++){ 
			descItems.eq(i).hide().css({ 
				'position':'absolute','top':'0','left':'0' 
				});	 
			}
			descItems.eq(0).show(); 
		};
		CarouselEvo.prototype.hideDesc=function(index){ 
			var o=this.settings;
			if(o.description==true){ 
				var desc=$(o.descriptionContainer);desc.children('div').eq(index).hide(); 
			} 
		};
		CarouselEvo.prototype.showDesc=function(index){ 
			var o=this.settings;
			if(o.description==true){ 
				var desc=$(o.descriptionContainer);desc.children('div').eq(index).show(); 
			} 
		};
		CarouselEvo.prototype.initSpinner=function(){ 
			var sz=this.setImageSize(0);
			$('<div class="spinner"></div>').hide().css(this.setSlidePosition(0)).css({ 
			'width':sz.width+'px','height':sz.height+'px','z-index':this.numberSlides+3,'position':'absolute','cursor':'pointer','overflow':'hidden','padding':'0','margin':'0','border':'none' 
			}).appendTo(this.carousel); 
		};
		CarouselEvo.prototype.initVideo=function(){ 
			this.initSpinner();
			var sz=this.setImageSize(0);
			$('<div class="videoOverlay"></div>').hide().css(this.setSlidePosition(0)).css({ 
			'width':sz.width+'px','height':sz.height+'px','z-index':this.numberSlides+2,'position':'absolute','cursor':'pointer','overflow':'hidden','padding':'0','margin':'0','border':'none' 
			}).bind('click',this.videoOverlayClick).appendTo(this.carousel);this.showVideoOverlay(this.currentSlide); 
		};
		CarouselEvo.prototype.showVideoOverlay=function(index){ 
			if(this.slideItems.eq(index).children('a').hasClass('video')){ 
				this.carousel.children('.videoOverlay').show(); 
			} 
		};
		CarouselEvo.prototype.hideVideoOverlay=function(){ 
			var car=this.carousel;car.children('.videoOverlay').hide().children().remove();car.children('.spinner').hide(); 
		};
		CarouselEvo.prototype.getVideo=function(url){ 
			var types=videos,src;
			$.each(types,
				function(i,e){ 
				if(url.match(e.reg)){ 
				var id=url.split(e.split)[e.index].split('?')[0].split('&')[0];src=e.url.replace("%id%",id); 
				} 
				});

			return src; 
		};
		CarouselEvo.prototype.addVideoContent=function(){ 
			var vo=this.carousel.children('.videoOverlay'),url=this.slideItems.eq(this.currentSlide).children('a').attr('href'),src=getVideo(url);
			$('<iframe></iframe>').attr({ 
			'width':vo.width()+'px','height':vo.height()+'px','src':src,'frameborder':'0' 
			}).bind('load',videoLoad).appendTo(vo); 
		};
		CarouselEvo.prototype.videoOverlayClick=function(event){ 
			addVideoContent();this.carousel.children('.spinner').show();
			$(this).hide();
			if(this.settings.autoplay==true){ 
				this.stopAutoplay();pause=false; 
			} 
		};
		CarouselEvo.prototype.videoLoad=function(event){ 
			var car=carousel;car.children('.videoOverlay').show();car.children('.spinner').hide(); 
		};
		CarouselEvo.prototype.runAutoplay=function(){ 
			var self=this;
			self.intervalProcess=setInterval(function(){ 
				self.goTo(self.currentSlide+1,false,true); 
			},self.settings.autoplayInterval); 
		};
		CarouselEvo.prototype.stopAutoplay=function(){ 
			var self=this;
			if(self.settings.autoplay==true){ 
				clearInterval(self.intervalProcess);
			return; 
			} 
		};
		CarouselEvo.prototype.prev=function(){ 
			this.goTo(this.currentSlide-1,true,false); 
		};
		CarouselEvo.prototype.next=function(){ 
			this.goTo(this.currentSlide+1,true,false); 
		};
		CarouselEvo.prototype.goToIndex=function(index){ 
			this.goTo(this.index,true,false); 
		};
		CarouselEvo.prototype.pause=function(){ 
			this.stopAutoplay();this.pause=false; 
		};
		CarouselEvo.prototype.resume=function(){ 
			if(this.settings.autoplay==true){ 
				runAutoplay(); 
			} 
		}; 
		 return CarouselEvo;
	 })(jQuery);
	
	carouselevo = new CarouselEvo();
	carouselevo.create = function(elementObj , options , index) {
		var carl;
		carl = new CarouselEvo();
		if (elementObj != null) {
		  carl.setInitOption(elementObj,options, index);
		}

		return carl;
	  };
	  
	jQuery.fn.CarouselGoTo=function( Carousel_index,target_index){
		returnArr[Carousel_index].goTo(target_index,true,false);
	}

	jQuery.fn.getCarousel=function(index){
		return returnArr[index];
	}
	var returnArr=[]; 
	jQuery.fn.carousel=function( keyStr , options){ 
		var target = jQuery(keyStr)		
		var carouselobj=null;
		var idx = 0;
		for(var i=0;i<target.length;i++){
			if(!target[i].carousel){
				carouselobj = carouselevo.create(target[i],options,idx++);
				target[i].carousel= carouselobj;
				returnArr.push(carouselobj); 
			}
		}			
		return returnArr;
	};
	
	jQuery.fn.carousel.defaults={ 
		userNavigation: {prevEl : '#btn_prev_',
					 nextEl : '#btn_next_',
					},
		change_offset:40,
		hAlign:'center',vAlign:'center',hMargin:0.4,vMargin:0.2,frontWidth:400,frontHeight:300,carouselWidth:1000,carouselHeight:360,left:0,right:0,top:0,bottom:0,backZoom:0.8,slidesPerScroll:3,speed:500,buttonNav:'none',directionNav:false,autoplay:true,autoplayInterval:3000,pauseOnHover:true,mouse:true,shadow:false,reflection:false,reflectionHeight:0.2,reflectionOpacity:0.5,reflectionColor:'255,255,255',description:false,descriptionContainer:'.description',backOpacity:1,before:function(cur){},after:function(cur){}
	}; 
	
	
	(typeof module !== "undefined" && module !== null ? module.exports = carouselevo : void 0) || (this.carouselevo = carouselevo);
}).call(this);

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.11",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b)["offsetParent"in a.fn?"offsetParent":"parent"]();return c.length||(c=a("body")),parseInt(c.css("fontSize"),10)},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});