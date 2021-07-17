package com.rafli.tugasakhirsemester4.ui.my_devitacollection;

import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import com.rafli.tugasakhirsemester4.CategoryAdapter;
import com.rafli.tugasakhirsemester4.CategoryModel;
import com.rafli.tugasakhirsemester4.DBquerries;
import com.rafli.tugasakhirsemester4.HorizontalProductScrollModel;
import com.rafli.tugasakhirsemester4.MainActivity;
import com.rafli.tugasakhirsemester4.DevitaCollectionAdapter;
import com.rafli.tugasakhirsemester4.DevitaCollectionModel;
import com.rafli.tugasakhirsemester4.R;
import com.rafli.tugasakhirsemester4.SliderModel;
import com.rafli.tugasakhirsemester4.WishlistModel;
import com.bumptech.glide.Glide;
import com.rafli.tugasakhirsemester4.CategoryAdapter;
import com.rafli.tugasakhirsemester4.DevitaCollectionModel;

import java.util.ArrayList;
import java.util.List;

import static com.rafli.tugasakhirsemester4.DBquerries.categoryModelList;
import static com.rafli.tugasakhirsemester4.DBquerries.lists;
import static com.rafli.tugasakhirsemester4.DBquerries.loadCategories;
import static com.rafli.tugasakhirsemester4.DBquerries.loadFragmentData;
import static com.rafli.tugasakhirsemester4.DBquerries.loadedCategoriesNames;

public class DevitaCollectionFragment extends Fragment {

    public static SwipeRefreshLayout swipeRefreshLayout;
    private RecyclerView categoryRecyclerView , homepageRecyclerview;
    private CategoryAdapter categoryAdapter;
    private DevitaCollectionAdapter DevitaCollectionAdapter;

    private ImageView noInternet;
    private Button retryBtn;

    private List<CategoryModel> categoryModelFakeList=new ArrayList<>();
    private List<DevitaCollectionModel> DevitaCollectionModelFakeList=new ArrayList<>();


    NetworkInfo networkInfo;
    ConnectivityManager connectivityManager;

    public DevitaCollectionFragment(){

    }

    public View onCreateView(@NonNull LayoutInflater inflater,ViewGroup container, Bundle savedInstanceState) {

        View view = inflater.inflate(R.layout.fragment_my_mall, container, false);
        swipeRefreshLayout=view.findViewById(R.id.refresh_layout);
        noInternet=view.findViewById(R.id.no_internet);
        retryBtn=view.findViewById(R.id.retry_btn);
        homepageRecyclerview =view.findViewById(R.id.my_mall_recyclerview);
        categoryRecyclerView=view.findViewById(R.id.category_recycler_view);
        swipeRefreshLayout.setColorSchemeColors(getContext().getResources().getColor(R.color.colorPrimary),getContext().getResources().getColor(R.color.colorPrimary),getContext().getResources().getColor(R.color.colorPrimary));


        LinearLayoutManager linearLayoutManager=new LinearLayoutManager(getActivity());
        linearLayoutManager.setOrientation(LinearLayoutManager.HORIZONTAL);
        categoryRecyclerView.setLayoutManager(linearLayoutManager);

        LinearLayoutManager testingLayoutManager = new LinearLayoutManager(getContext());
        testingLayoutManager.setOrientation(LinearLayoutManager.VERTICAL);
        homepageRecyclerview.setLayoutManager(testingLayoutManager);


//////////category fake list
        categoryModelFakeList.add(new CategoryModel("null",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));
        categoryModelFakeList.add(new CategoryModel("",""));

//////////category fake list


//////////home page fake list

        List<SliderModel> sliderModelFakeList=new ArrayList<>();

        sliderModelFakeList.add(new SliderModel("null","#dfdfdf"));
        sliderModelFakeList.add(new SliderModel("null","#dfdfdf"));
        sliderModelFakeList.add(new SliderModel("null","#dfdfdf"));
        sliderModelFakeList.add(new SliderModel("null","#dfdfdf"));
        sliderModelFakeList.add(new SliderModel("null","#dfdfdf"));

        List<HorizontalProductScrollModel> horizontalProductScrollModelFakeList=new ArrayList<>();
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));
        horizontalProductScrollModelFakeList.add(new HorizontalProductScrollModel("","","","",""));

        DevitaCollectionModelFakeList.add(new DevitaCollectionModel(0,sliderModelFakeList));
        myMallModelFakeList.add(new MyMallModel(1,"","#dfdfdf"));
        myMallModelFakeList.add(new MyMallModel(2,"","#dfdfdf",horizontalProductScrollModelFakeList,new ArrayList<WishlistModel>()));
        myMallModelFakeList.add(new MyMallModel(3,"","#dfdfdf",horizontalProductScrollModelFakeList));

//////////home page fake list

        categoryAdapter= new CategoryAdapter(categoryModelFakeList);
        myMallAdapter=new MyMallAdapter(myMallModelFakeList);

        connectivityManager=(ConnectivityManager)getActivity().getSystemService(Context.CONNECTIVITY_SERVICE);
        networkInfo = connectivityManager.getActiveNetworkInfo();

        if(networkInfo != null && networkInfo.isConnected()==true){
            MainActivity.drawer.setDrawerLockMode(DrawerLayout.LOCK_MODE_UNLOCKED);
            noInternet.setVisibility(View.GONE);
            retryBtn.setVisibility(View.GONE);
            categoryRecyclerView.setVisibility(View.VISIBLE);
            homepageRecyclerview.setVisibility(View.VISIBLE);

            if(categoryModelList.size() == 0){
                loadCategories(categoryRecyclerView,getContext());
            }else {
                categoryAdapter=new CategoryAdapter(categoryModelList);
                categoryAdapter.notifyDataSetChanged();
            }
            categoryRecyclerView.setAdapter(categoryAdapter);

            if(lists.size() == 0){
                loadedCategoriesNames.add("HOME");
                lists.add(new ArrayList<MyMallModel>());
                loadFragmentData(homepageRecyclerview,getContext(),0,"Home");
            }else {
                myMallAdapter=new MyMallAdapter(lists.get(0));
                myMallAdapter.notifyDataSetChanged();
            }
            homepageRecyclerview.setAdapter(myMallAdapter);
        }
        else {
            MainActivity.drawer.setDrawerLockMode(DrawerLayout.LOCK_MODE_LOCKED_CLOSED);
            categoryRecyclerView.setVisibility(View.GONE);
            homepageRecyclerview.setVisibility(View.GONE);
            Glide.with(this).load(R.drawable.no_internet).into(noInternet);
            noInternet.setVisibility(View.VISIBLE);
            retryBtn.setVisibility(View.VISIBLE);

        }

        ///refresh layout
        swipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                swipeRefreshLayout.setRefreshing(true);
                reloadPage();
            }
        });
        ///refresh layout

        retryBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                reloadPage();
            }
        });


        return view;
    }

    private void reloadPage(){
        networkInfo = connectivityManager.getActiveNetworkInfo();
//        categoryModelList.clear();
//        lists.clear();
//        loadedCategoriesNames.clear();
        DBquerries.clearData();
        if(networkInfo != null && networkInfo.isConnected()==true){
            MainActivity.drawer.setDrawerLockMode(DrawerLayout.LOCK_MODE_UNLOCKED);
            noInternet.setVisibility(View.GONE);
            retryBtn.setVisibility(View.GONE);
            categoryRecyclerView.setVisibility(View.VISIBLE);
            homepageRecyclerview.setVisibility(View.VISIBLE);
            categoryAdapter=new CategoryAdapter(categoryModelFakeList);
            DevitaCollectionAdapter=new DevitaCollectionAdapter(DevitaCollectionModelFakeList);
            categoryRecyclerView.setAdapter(CategoryAdapter);
            homepageRecyclerview.setAdapter(DevitaCollectionAdapter);


            loadCategories(categoryRecyclerView,getContext());
            loadedCategoriesNames.add("HOME");
            lists.add(new ArrayList<DevitaCollectionModel>());
            loadFragmentData(homepageRecyclerview,getContext(),0,"Home");
        }else {
            MainActivity.drawer.setDrawerLockMode(DrawerLayout.LOCK_MODE_LOCKED_CLOSED);
            Toast.makeText(getContext(),"No internet Connection!",Toast.LENGTH_SHORT).show();
            categoryRecyclerView.setVisibility(View.GONE);
            homepageRecyclerview.setVisibility(View.GONE);
            Glide.with(getContext()).load(R.drawable.no_internet).into(noInternet);
            noInternet.setVisibility(View.VISIBLE);
            retryBtn.setVisibility(View.VISIBLE);
            swipeRefreshLayout.setRefreshing(false);
        }
    }

}