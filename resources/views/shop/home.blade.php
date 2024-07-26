


<div className={`w-full max-w-[1280px] px-5 py-1 md:px-10 mx-auto bg-white`}>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 my-14 px-5 md:px-0">
          {productData.map((data, index) => {
            return (
              <Link
                href={`/shop/${data.slug}`}
                className="transform overflow-hidden bg-white duration-200 hover:scale-105 cursor-pointer"
                key={index}
              >
                <div className="bg-[#f3f6f9] p-2">
                <Image
                  width={500}
                  height={500}
                  src={data.img}
                  alt={data.title}
                />
                </div>
                <div className="p-2 text-black/[0.9]">
                  <h2 className="text-base font-medium leading-tight">{data.title}</h2>
                  <div className="flex items-center text-black/[0.5]">
                    <p className="mr-2 text-lg text-gray-950 font-semibold">
                      &#8377;{data.price}
                    </p>

                    {data.price && (
                      <>
                        <p className="text-base  font-medium line-through">
                          &#8377;{data.price}
                        </p>
                      </>
                    )}
                  </div>
                </div>
              </Link>
            );
          })}
        </div>
      </div>